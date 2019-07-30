<nav class="navbar navbar-default navbar-custom navbar-fixed-top">
    <div class="container-fluid">
        <div class="navbar-header page-scroll">
            <button type="button" class="navbar-toggle">
                <span class="sr-only"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="<?php $this->options->siteUrl(); ?>"><?php $this->options->title() ?></a>
        </div>
        <div id="huxblog_navbar">
            <div class="navbar-collapse">
                <ul class="nav navbar-nav">
                    <li><a href="https://www.jxoj.net/" target="_blank">JXOJ</a></li>
                    <li><a href="https://github.com/blackwhitetony" target="_blank">github</a></li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li><a id="nav-index" href="<?php $this->options->siteUrl(); ?>">首页</a></li>
                    <li><a class="seai"><i class="mdui-icon material-icons">&#xe8b6;</i></a></li>
                </ul>
            </div>
        </div>
    </div>
</nav>
<div class="titleBarGobal mdui-appbar" id="SearchBar" style="display: none;">
    <form class="mdui-toolbar mdui-appbar-fixed" role="search" method="get" id="searchform" style="opacity: 0;">
        <div class="outOfSearch mdui-valign" style="width: 30%;"> <input class="seainput" type="text" name="s" autocomplete="off" placeholder="搜索什么..." value=""></div>
        <div class="mdui-toolbar-spacer"></div>
        <a class="mdui-btn mdui-btn-icon sea-close"><i class="mdui-icon material-icons">&#xe5cd;</i></a>
    </form>
</div>