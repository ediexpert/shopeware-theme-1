{extends file="parent:frontend/index/search.tpl"}
{* Search container *}
{block name='frontend_index_search_container'}
    <form action="{url controller='search' fullPath=false}" method="get" class="main-search--form form-bordered">
        {block name="frontend_index_search_innerform"}{/block}

        {* Search icon *}
        {block name='frontend_index_search_icon'}

        {/block}

        {* Search field *}
        {block name='frontend_index_search_field'}
            <input type="search" name="sSearch" class="search_input" autocomplete="off" autocapitalize="off" placeholder="{s name="IndexSearchFieldPlaceholder"}{/s}" maxlength="30"  />
        {/block}

        {* Search input *}



        {* Ajax loader *}
        {block name='frontend_index_search_ajax_loader'}
            <div class="form--ajax-loader">&nbsp;</div>
        {/block}
    </form>

    {* Search results *}
    {block name='frontend_index_search_results'}
        <div class="main-search--results"></div>
    {/block}
{/block}
