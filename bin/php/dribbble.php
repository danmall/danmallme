<?php
/**
 * PHP wrapper for the Dribbble API.
 * Released under the MIT License.
 * 
 * @author  Martin Bean <martin@mcbwebdesign.co.uk>
 * @package Dribbble API PHP Wrapper
 * @version 2.0
 */

if (!function_exists('curl_init')) {
    throw new Exception('Dribbble API needs the cURL PHP extension.');
}

if (!function_exists('json_decode')) {
    throw new Exception('Dribbble API needs the JSON PHP extension.');
}

/**
 * Thrown when an API call returns an exception.
 */
class DribbbleException extends Exception {}

/**
 * The core Dribbble API PHP wrapper class.
 */
class Dribbble
{
    /**
     * Default options for cURL requests.
     *
     * @var array
     */
    public static $CURL_OPTS = array(
        CURLOPT_CONNECTTIMEOUT => 10,
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_TIMEOUT        => 60,
        CURLOPT_USERAGENT      => 'dribbble-api-php-wrapper'
    );
    
    /**
     * The API endpoint.
     *
     * @var string
     */
    protected $endpoint = 'http://api.dribbble.com';
    
    /**
     * Returns details for a shot specified by ID.
     *
     * @param  integer $id
     * @return object
     */
    public function get_shot($id)
    {
        return $this->makeRequest(sprintf('/shots/%d', $id), 'GET');
    }
    
    /**
     * Returns the set of rebounds (shots in response to a shot) for the shot specified by ID.
     *
     * @param  integer $id
     * @return object
     */
    public function get_shot_rebounds($id)
    {
        return $this->makeRequest(sprintf('/shots/%d/rebounds', $id), 'GET');
    }
    
    /**
     * Returns the set of comments for the shot specified by ID.
     *
     * @param  integer $id
     * @return object
     */
    public function get_shot_comments($id)
    {
        return $this->makeRequest(sprintf('/shots/%d/comments', $id), 'GET');
    }
    
    /**
     * Returns the specified list of shots.
     *
     * @param  string  $list
     * @param  integer $page
     * @param  integer $per_page
     * @return object
     */
    public function get_shots_list($list = 'everyone', $page = 1, $per_page = 15)
    {
        $options = array('page' => intval($page), 'per_page' => intval($per_page));
        return $this->makeRequest(sprintf('/shots/%s', $id), 'GET', $options);
    }
    
    /**
     * Returns the most recent shots for the player specified.
     *
     * @param  mixed   $id
     * @param  integer $page
     * @param  integer $per_page
     * @return object
     */
    public function get_player_shots($id, $page = 1, $per_page = 15)
    {
        $options = array('page' => intval($page), 'per_page' => intval($per_page));
        return $this->makeRequest(sprintf('/players/%s/shots', $id), 'GET', $options);
    }
    
    /**
     * Returns the most recent shots published by those the player specified is following.
     *
     * @param  mixed   $id
     * @param  integer $page
     * @param  integer $per_page
     * @return object
     */
    public function get_player_following_shots($id, $page = 1, $per_page = 15)
    {
        $options = array('page' => intval($page), 'per_page' => intval($per_page));
        return $this->makeRequest(sprintf('/players/%s/shots/following', $id), 'GET', $options);
    }
    
    /**
     * Returns shots liked by the player specified.
     *
     * @param  mixed   $id
     * @param  integer $page
     * @param  integer $per_page
     * @return object
     */
    public function get_player_likes($id, $page = 1, $per_page = 15)
    {
        $options = array('page' => intval($page), 'per_page' => intval($per_page));
        return $this->makeRequest(sprintf('/players/%s/shots/likes', $id), 'GET', $options);
    }
    
    /**
     * Returns profile details for a player specified.
     *
     * @param  mixed   $id
     * @return object
     */
    public function get_player($id)
    {
        return $this->makeRequest(sprintf('/players/%s', $id), 'GET');
    }
    
    /**
     * Returns the list of followers for a player specified.
     *
     * @param  mixed  $id
     * @return object
     */
    public function get_player_followers($id)
    {
        return $this->makeRequest(sprintf('/players/%s/followers', $id), 'GET');
    }
    
    /**
     * Returns the list of players followed by the player specified.
     *
     * @param  mixed  $id
     * @return object
     */
    public function get_player_following($id)
    {
        return $this->makeRequest(sprintf('/players/%s/following', $id), 'GET');
    }
    
    /**
     * Returns the list of players drafted by the player specified.
     *
     * @param  mixed  $id
     * @return object
     */
    public function get_player_draftees($id)
    {
        return $this->makeRequest(sprintf('/players/%s/following', $id), 'GET');
    }
    
    /**
     * Makes a HTTP request.
     * This method can be overriden by extending classes if required.
     *
     * @param  string $url
     * @param  string $method
     * @param  array  $params
     * @return object
     * @throws DribbbleException
     */
    protected function makeRequest($url, $method = 'GET', $params = array())
    {
        $ch = curl_init();
        $options = self::$CURL_OPTS;
        $options[CURLOPT_URL] = $this->endpoint . $url;
        if (!empty($params)) {
            $options[CURLOPT_URL].= '?'.http_build_query($params, null, '&');
        }
        curl_setopt_array($ch, $options);
        $result = curl_exec($ch);
        if ($result === false) {
            $e = new DribbbleException(curl_error($ch), curl_errno($ch));
            curl_close($ch);
            throw new $e;
        }
        curl_close($ch);
        return json_decode($result);
    }
}