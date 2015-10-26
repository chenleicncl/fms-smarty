</head>
<body>
<nav class="navbar navbar-inverse">
    <div class="navbar-header"><a href="/fms/" class="navbar-brand" target="_blank">/fms/</a></div>
    <ul class="nav navbar-nav">
        <li {if $PAGE_PATH == "/"}class="active"{/if} >
            <a href="/">Home</a>
        </li>
        <li {if $PAGE_PATH == "/news/"}class="active"{/if} >
            <a href="/news/">News</a>
        </li>
        <li {if $PAGE_PATH == "/message/"}class="active"{/if}>
            <a href="/message/">Message</a>
        </li>
        <li>
            <a href="https://github.com/nimojs/fms-smarty"  target="_blank">Github</a>
        </li>
    </ul>
</nav>