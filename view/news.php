{include file="include/header1.php"}
<title>News</title>
{include file="include/header2.php"}

<div class="row container">
    <h1>新闻</h1>
    <ul>
        {foreach $news as $this}
        <li>
            <a href="{$this.link}">{$this.title}</a>
        </li>
        {/foreach}
    </ul>
</div>

{include file="include/footer1.php"}