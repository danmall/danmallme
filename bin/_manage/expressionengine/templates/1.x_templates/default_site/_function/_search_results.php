	<h2>Search Results</h2>
								
	<h3>We found {exp:search:total_results} results for "<strong>{exp:search:keywords}</strong>"</h3>

	<table id="search_results">

	<tr>
		<th>{lang:title}</th>
		<th>Excerpt</th>
	</tr>

	{exp:search:search_results status="open" switch="resultRowTwo|resultRowOne"}
	<tr>
		<td class="search_title {switch}">
		<a href="
		
			{!-- 
			=====================================================================================================/
			AS NEWS AND PROJECTS HAVE A STRUCTURE PAGE, THEY WILL ALSO HAVE A PAGE_URL SO WE NEED TO EXCLUDE THESE WEBLOGS AND FORCE THEM TO USE THE SEARCH RESULTS URL (WEBLOG ADMIN -> EDIT CHANNEL -> PATH SETTINGS)
			=====================================================================================================/
			--}
			
			{if page_url != "" && (weblog != "News" && weblog != "Projects")}
				{page_url}
			{if:else}
				{auto_path}
			{/if}
		">{title}</a>
		</td>
		<td class="search_channel {switch}">{exp:trunchtml chars="80"}{general_body}{/exp:trunchtml}</td>
	</tr>
	{/exp:search:search_results}

	</table>

	{if paginate}
	<span class="pagecount">{page_count}</span>&nbsp; {paginate}
	{/if}