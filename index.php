<?php
require "common.php";

if ($set['autokeywords'] == 1) {
	$word = get_word();
} else {
	$word = "信站网";
}
?>
<!DOCTYPE html>
<html lang="zh-CN">
 <head> 
  <meta charset="UTF-8" /> 
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0" /> 
  <meta http-equiv="Cache-Control" content="no-siteapp" /> 
  <meta name="apple-mobile-web-app-capable" content="yes" /> 
  <meta name="apple-touch-fullscreen" content="yes" /> 
  <meta name="apple-mobile-web-app-status-bar-style" content="black" /> 
  <meta name="full-screen" content="yes" />
  <!--UC强制全屏--> 
  <meta name="browsermode" content="application" />
  <!--UC应用模式--> 
  <meta name="x5-fullscreen" content="true" />
  <!--QQ强制全屏--> 
  <meta name="x5-page-mode" content="app" />
  <!--QQ应用模式--> 
  <title>微吧搜索</title> 
  <meta name="keywords" content="信网导航,微吧搜索,微吧搜索导航,信网,信网工具,信网短网址,信网图床,信网在线ps,信网图床工具,信网音乐">
  <meta name="description" content="可能是最简洁的搜索导航，给你简单舒爽的搜索体验。">
  <link rel="shortcut icon" href="favicon.ico" type="image/x-icon" /> 
  <link href="css/style.css" rel="stylesheet" /> 
  <link href="css/sousuo.css" rel="stylesheet" /> 
  <link rel="stylesheet" href="//at.alicdn.com/t/font_1230786_gdvd1b4wlz.css" /> 
  <link rel="stylesheet" href="//at.alicdn.com/t/font_1572019_yrk10qvz.css" /> 
  <script src="https://cdnjs.loli.net/ajax/libs/jquery/3.3.1/jquery.min.js"></script> 
  <script src="js/xd.js"></script> 
 </head> 
 <body> 
  <div id="menu">
   <i></i>
  </div> 
  <div class="list closed"> 
   <ul>
    <li class="title"><i class="iconfont icon-changyong"></i> 常用</li> 
    <li><a rel="nofollow" href="https://music.qugeek.com/app/player" target="_blank">音乐下载</a></li> 
    <li><a rel="nofollow" href="http://m.quanmama.com/" target="_blank">淘宝优惠券</a></li> 
    <li><a rel="nofollow" href="http://dwz.xiandu.me/" target="_blank">短网址生成</a></li> 
    <!----> 
    <li class="title"><i class="iconfont icon-msg"></i> 论坛、社交</li> 
    <li><a rel="nofollow" href="https://www.52pojie.cn/" target="_blank">吾爱破解论坛</a></li> 
    <li><a rel="nofollow" href="https://www.csdn.net/" target="_blank">CSDN</a></li> 
    <li><a rel="nofollow" href="https://www.weibo.com" target="_blank">微博</a></li> 
    <li><a rel="nofollow" href="https://www.zhihu.com/" target="_blank">知乎</a></li> 
    <li><a rel="nofollow" href="https://m.douban.com/home_guide" target="_blank">豆瓣</a></li> 
    <li><a rel="nofollow" href="http://www.weibasq.com" target="_blank">微吧社区</a></li> 
    <!----> 
    <li class="title"><i class="iconfont icon-kologom"></i> 音乐试听</li> 
    <li><a rel="nofollow" href="https://music.qugeek.com/app/player" target="_blank">墨灵音乐</a></li> 
	<!----> 
    <li class="title"><i class="iconfont icon-shipin"></i> 视频媒体</li> 
    <li><a rel="nofollow" href="https://v.qq.com/" target="_blank">腾讯视频</a></li> 
    <li><a rel="nofollow" href="https://www.youku.com/" target="_blank">优酷</a></li> 
    <li><a rel="nofollow" href="https://www.iqiyi.com/" target="_blank">爱奇艺</a></li> 
    <li><a rel="nofollow" href="https://m.1905.com/" target="_blank">1905电影网</a></li> 
    <!----> 
    <li class="title"><i class="iconfont icon-Qyouhuiquan"></i> 免费领券</li> 
    <li><a rel="nofollow" href="http://m.quanmama.com/" target="_blank">券妈妈</a></li> 
	<!----> 
    <li class="title"><i class="iconfont icon-youxiang"></i> 邮箱</li> 
    <li><a rel="nofollow" href="https://mail.163.com/" target="_blank">网易邮箱</a></li> 
    <li><a rel="nofollow" href="https://mail.qq.com/" target="_blank">QQ邮箱</a></li> 
    <!----> 
    <li class="title"><i class="iconfont icon-sheji"></i> 设计视觉</li> 
    <li><a rel="nofollow" href="https://huaban.com/" target="_blank">花瓣</a></li> 
    <li><a rel="nofollow" href="https://ui.cn/" target="_blank">UI中国</a></li> 
    <li><a rel="nofollow" href="https://www.zcool.com.cn/" target="_blank">站酷</a></li> 
    <li><a rel="nofollow" href="https://www.uisdc.com/" target="_blank">优设</a></li> 
    <!----> 
    <li class="title"><i class="iconfont icon-ai-tool"></i> 工具</li> 
    <li><a rel="nofollow" href="https://translate.google.cn/?hl=zh-CN" target="_blank">谷歌翻译</a></li> 
    <li><a rel="nofollow" href="https://pan.baidu.com" target="_blank">百度网盘</a></li> 
    <li><a rel="nofollow" href="https://ping.pe" target="_blank">Ping.pe</a></li> 
    <li><a rel="nofollow" href="https://ping.chinaz.com/" target="_blank">站长Ping</a></li> 
    <!----> 
   </ul> 
  </div> 
  <div id="search" class="s-search">
   <div id="search-list" class="hide-type-list">
    <div class="s-type">
     <span></span>
     <div class="s-type-list animated fadeInUp">
      <label for="type-baidu">常用</label>
      <label for="type-search">搜索</label>
      <label for="type-br">工具</label>
      <label for="type-zhihu">社区</label>
      <label for="type-taobao1">生活</label>
     </div>
    </div>
    <div class="search-group group-a">
     <span class="type-text">常用</span>
     <ul class="search-type">
      <li><input onclick="bw()" checked="" hidden="" type="radio" name="type" id="type-baidu" value="https://www.baidu.com/s?wd=" data-placeholder="百度一下" /><label for="type-baidu"><span>百度</span></label></li>
      <li><input onclick="bq()" hidden="" type="radio" name="type" id="yyss" value="https://www.1905.com/search/?q=" data-placeholder="影视搜索" /><label for="yyss"><span>影视</span></label></li>
      <li><input onclick="bw()" hidden="" type="radio" name="type" id="type-taobao" value="https://music.qugeek.com/app/player.php?auto-action=true&action=search&s-source=tencent&wd=" data-placeholder="音乐搜索下载" /><label for="type-taobao"><span>音乐</span></label></li>
      <li><input onclick="bw()" hidden="" type="radio" name="type" id="type-bing1" value="http://www.quanmama.com/search/?keyword=" data-placeholder="淘宝优惠券" /><label for="type-bing1"><span>优惠券</span></label></li>
     </ul>
    </div>
    <div class="search-group group-b">
     <span class="type-text">搜索</span>
     <ul class="search-type">
      <li><input onclick="bw()" hidden="" type="radio" name="type" id="type-search" value="https://www.baidu.com/s?wd=" data-placeholder="百度一下" /><label for="type-search"><span>百度</span></label></li>
      <li><input onclick="bw()" hidden="" type="radio" name="type" id="type-google" value="https://www.google.com/search?q=" data-placeholder="谷歌两下" /><label for="type-google"><span>Google</span></label></li>
      <li><input onclick="bw()" hidden="" type="radio" name="type" id="type-360" value="https://www.so.com/s?q=" data-placeholder="360好搜" /><label for="type-360"><span>360</span></label></li>
      <li><input onclick="bw()" hidden="" type="radio" name="type" id="type-sogo" value="https://www.sogou.com/web?query=" data-placeholder="搜狗搜索" /><label for="type-sogo"><span>搜狗</span></label></li>
      <li><input onclick="bw()" hidden="" type="radio" name="type" id="type-bing" value="https://cn.bing.com/search?q=" data-placeholder="微软Bing搜索" /><label for="type-bing"><span>Bing</span></label></li>
      <li><input onclick="bw()" hidden="" type="radio" name="type" id="type-sm" value="https://yz.m.sm.cn/s?q=" data-placeholder="UC移动端搜索" /><label for="type-sm"><span>神马</span></label></li>
     </ul>
    </div>
    <div class="search-group group-c">
     <span class="type-text">工具</span>
     <ul class="search-type">
      <li><input onclick="bw()" hidden="" type="radio" name="type" id="type-br" value="http://rank.chinaz.com/all/" data-placeholder="请输入网址(不带http://)" /><label for="type-br"><span>权重查询</span></label></li>
      <li><input onclick="bw()" hidden="" type="radio" name="type" id="type-links" value="http://link.chinaz.com/" data-placeholder="请输入网址(不带http://)" /><label for="type-links"><span>友链检测</span></label></li>
      <li><input onclick="bw()" hidden="" type="radio" name="type" id="type-icp" value="https://icp.aizhan.com/" data-placeholder="请输入网址(不带http://)" /><label for="type-icp"><span>备案查询</span></label></li>
      <li><input onclick="bw()" hidden="" type="radio" name="type" id="type-ping" value="http://ping.chinaz.com/" data-placeholder="请输入网址(不带http://)" /><label for="type-ping"><span>PING检测</span></label></li>
      <li><input onclick="bw()" hidden="" type="radio" name="type" id="type-404" value="http://tool.chinaz.com/Links/?DAddress=" data-placeholder="请输入网址(不带http://)" /><label for="type-404"><span>死链检测</span></label></li>
      <li><input onclick="bw()" hidden="" type="radio" name="type" id="type-ciku" value="http://www.ciku5.com/s?wd=" data-placeholder="请输入关键词" /><label for="type-ciku"><span>关键词挖掘</span></label></li>
     </ul>
    </div>
    <div class="search-group group-d">
     <span class="type-text">社区</span>
     <ul class="search-type">
      <li><input onclick="bw()" hidden="" type="radio" name="type" id="type-zhihu" value="https://www.zhihu.com/search?type=content&amp;q=" data-placeholder="知乎" /><label for="type-zhihu"><span>知乎</span></label></li>
      <li><input onclick="bw()" hidden="" type="radio" name="type" id="type-wechat" value="http://weixin.sogou.com/weixin?type=2&amp;query=" data-placeholder="微信" /><label for="type-wechat"><span>微信</span></label></li>
      <li><input onclick="bw()" hidden="" type="radio" name="type" id="type-weibo" value="http://s.weibo.com/weibo/" data-placeholder="微博" /><label for="type-weibo"><span>微博</span></label></li>
      <li><input onclick="bw()" hidden="" type="radio" name="type" id="type-douban" value="https://www.douban.com/search?q=" data-placeholder="豆瓣" /><label for="type-douban"><span>豆瓣</span></label></li>
      <li><input onclick="bw()" hidden="" type="radio" name="type" id="type-why" value="https://ask.seowhy.com/search/?q=" data-placeholder="SEO问答社区" /><label for="type-why"><span>搜外问答</span></label></li>
     </ul>
    </div>
    <div class="search-group group-e">
     <span class="type-text">生活</span>
     <ul class="search-type">
      <li><input onclick="bw()" hidden="" type="radio" name="type" id="type-taobao1" value="http://t.xiandu.me/index.php?input=2&amp;r=l&amp;kw=" data-placeholder="淘宝优惠券" /><label for="type-taobao1"><span>优惠券</span></label></li>
      <li><input onclick="bw()" hidden="" type="radio" name="type" id="type-快递100" value="http://www.kuaidi100.com/?" data-placeholder="快递100" /><label for="type-快递100"><span>快递100</span></label></li>
      <li><input onclick="bw()" hidden="" type="radio" name="type" id="type-xiachufang" value="http://www.xiachufang.com/search/?keyword=" data-placeholder="下厨房" /><label for="type-xiachufang"><span>下厨房</span></label></li>
      <li><input onclick="bw()" hidden="" type="radio" name="type" id="type-xiangha" value="https://www.xiangha.com/so/?q=caipu&amp;s=" data-placeholder="香哈菜谱" /><label for="type-xiangha"><span>香哈菜谱</span></label></li>
      <li><input onclick="bw()" hidden="" type="radio" name="type" id="type-12306" value="http://www.12306.cn/?" data-placeholder="12306" /><label for="type-12306"><span>12306</span></label></li>
      <li> <input onclick="bw()" hidden="" type="radio" name="type" id="type-qunar" value="https://www.qunar.com/?" data-placeholder="去哪儿" /><label for="type-qunar"><span>去哪儿</span></label></li>
     </ul>
    </div>
   </div>
   <form action="https://www.baidu.com/s?wd=" method="get" target="_blank" id="super-search-fm">
    <input type="text" id="search-text" placeholder="输入关键字搜索" style="outline:0" />
    <button type="submit"><i class="iconfont icon-xdss"></i></button>
    <ul id="ul" class="ko"></ul>
   </form>
   <div id="yy" style="display:none;">
    <input type="text" id="kos" placeholder="<?php echo $word; ?>" />
    <button type="submit" id="kob"><i class="iconfont icon-xdss"></i></button>
    <ul id="kol" class="ko"></ul>
   </div>
   <div class="set-check hidden-xs">
    <input type="checkbox" id="set-search-blank" class="bubble-3" autocomplete="off" />
   </div>
  </div> 
  <script type="text/javascript" src="js/yyss.js"></script>
  <script type="text/javascript" src="js/sousuo.js"></script> 
  <script type="text/javascript" src="js/lianxiang.js"></script> 
  <div class="bgo"></div> 
  <img class="logo" src="../img/logo.svg" />  
 </body>
</html>
<!--
网址：http://www.2uii.com
github：https://github.com/xiandus/search
                XianDu，2020.1.6
-->