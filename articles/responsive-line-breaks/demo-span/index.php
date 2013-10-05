<!DOCTYPE html> 
<html dir="ltr" lang="en-US">
<head profile="http://gmpg.org/xfn/11">
    <title>Responsive Line Break Demo: Breaks</title>
    <meta name="description" content="Responsive Line Breaks" />
    <meta charset="UTF-8" /> 
    <meta name="author" content="Dan Mall" />
    <meta name="viewport" content="width=device-width,initial-scale=1" />
    <style>
        
        * { margin: 0; padding: 0; }
        body { padding-top: 50px; }
                
        h1 { text-align: center; font-size: 16px; }
        .rwd-line { display: block; }
        
        @media screen and (min-width: 768px){
            .rwd-line { display: inline; }
        }
        
        
        /* Back to article bar */
        .back { background-color: #111; color: #fefefe; text-align: center; padding: 0.5em 0; position: absolute; bottom: 0; left; 0; width: 100%; }
            .back a { color: #888; text-decoration: none; }
            .back a:hover, .back a:focus { color: #eee; }
    
    </style>
</head> 

<body>
    
    <h1><span class="rwd-line">You don&rsquo;t understand! I coulda had class.</span> <span class="rwd-line">I coulda been a contender.</span></h1>
    
    <p class="back"><a href="../">&larr;&nbsp;Back to the article</a></p>
    
</body>
</html>

