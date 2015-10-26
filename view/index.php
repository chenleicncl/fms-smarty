{include file="include/header1.php"}
<title>Index</title>
{include file="include/header2.php"}

<div class="row container">
    <div class="col-md-6">
        <h2>新闻</h2>
        <ul>
            {foreach $news as $this}
            <li>
                <a href="{$this.link}">{$this.title}</a>
            </li>
            {/foreach}
        </ul>
        <a href="/news/" class="btn btn-default">查看更多</a>
    </div>
    <div class="col-md-6">
        <h2>留言</h2>
        <ul>
            {foreach $message as $this}
            <li>
                {$this.text} - <strong>{$this.nickname}</strong>
            </li>
            {/foreach}
        </ul>
        <a href="/message/" class="btn btn-default">查看更多</a>
    </div>
</div>

{include file="include/footer1.php"}