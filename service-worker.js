/**
 * Welcome to your Workbox-powered service worker!
 *
 * You'll need to register this file in your web app and you should
 * disable HTTP caching for this file too.
 * See https://goo.gl/nhQhGp
 *
 * The rest of the code is auto-generated. Please don't update this file
 * directly; instead, make changes to your Workbox build configuration
 * and re-run your build process.
 * See https://goo.gl/2aRDsh
 */

importScripts("https://storage.googleapis.com/workbox-cdn/releases/4.3.1/workbox-sw.js");

self.addEventListener('message', (event) => {
  if (event.data && event.data.type === 'SKIP_WAITING') {
    self.skipWaiting();
  }
});

/**
 * The workboxSW.precacheAndRoute() method efficiently caches and responds to
 * requests for URLs in the manifest.
 * See https://goo.gl/S9QRab
 */
self.__precacheManifest = [
  {
    "url": "404.html",
    "revision": "973ffbad6be7775aa73741ee23a14505"
  },
  {
    "url": "assets/css/0.styles.4415e5c9.css",
    "revision": "93935021b5d1aa0a6575eec72cdbcabe"
  },
  {
    "url": "assets/fonts/iconfont.938fa69e.woff",
    "revision": "938fa69ea89bccb0f20d643cc5f07cbe"
  },
  {
    "url": "assets/fonts/iconfont.ecabaf00.ttf",
    "revision": "ecabaf00c2c5be9907d524bb21a0f0dc"
  },
  {
    "url": "assets/img/bg.2cfdbb33.svg",
    "revision": "2cfdbb338a1d44d700b493d7ecbe65d3"
  },
  {
    "url": "assets/img/iconfont.36767f3e.svg",
    "revision": "36767f3efa2e4c880f42a42e8b2075b0"
  },
  {
    "url": "assets/img/sakura.5e4a2cfb.png",
    "revision": "5e4a2cfbc3aae83420146d71ee06ba17"
  },
  {
    "url": "assets/js/1.09eabf93.js",
    "revision": "1796754e27e649e3e3dcf18f2bb6f1ce"
  },
  {
    "url": "assets/js/10.4ee935f7.js",
    "revision": "bdc9a4535224e3317b5b59dd75f8f41b"
  },
  {
    "url": "assets/js/11.478384ea.js",
    "revision": "7e569fdcac2650af3968e622676c695e"
  },
  {
    "url": "assets/js/12.a755b6f6.js",
    "revision": "fadb604ed2181861c3aa492bc373c1f9"
  },
  {
    "url": "assets/js/13.3ab72cb3.js",
    "revision": "45c96853b3db6c40210e2342c7b87c45"
  },
  {
    "url": "assets/js/14.0ae9ab45.js",
    "revision": "aef2eadd8d8ad64e211cbb8e75645f75"
  },
  {
    "url": "assets/js/15.ca3a95b1.js",
    "revision": "37abfffb8bd6eed27fe3397f47f962f8"
  },
  {
    "url": "assets/js/16.db81403f.js",
    "revision": "a7f1b4cc53dfd5f124bcaf9529bf65b2"
  },
  {
    "url": "assets/js/17.47c01f38.js",
    "revision": "2b9c0b66b4dae01176511bc9bc5796d6"
  },
  {
    "url": "assets/js/18.698e9191.js",
    "revision": "ee97ede65584d69af338a0fd7b25c242"
  },
  {
    "url": "assets/js/19.255b41f5.js",
    "revision": "b426df944a1c3759ac6188569b10983f"
  },
  {
    "url": "assets/js/20.dd6c7658.js",
    "revision": "41f12d3506c6cd282340a2d3a3561411"
  },
  {
    "url": "assets/js/21.db2b4b33.js",
    "revision": "1b7d51b9dc63537470c7e220720e4806"
  },
  {
    "url": "assets/js/22.dd556488.js",
    "revision": "bfe51d53f8dfb88b52319f1fa3c3c9bc"
  },
  {
    "url": "assets/js/23.740b62b4.js",
    "revision": "8e7d7475567afb86d047d15ce63e14e4"
  },
  {
    "url": "assets/js/24.00a5198c.js",
    "revision": "9fb42c5f43a352c0d7d64f4bc234dd7f"
  },
  {
    "url": "assets/js/25.83214ede.js",
    "revision": "ce0ca839284bc091660525ef1c8ad38e"
  },
  {
    "url": "assets/js/26.520705ca.js",
    "revision": "eafc171d0c8e809e9850799133aa77e4"
  },
  {
    "url": "assets/js/27.b177e864.js",
    "revision": "a34dcde8a5632fa99015fad4742e138a"
  },
  {
    "url": "assets/js/28.51f8bc15.js",
    "revision": "79c95f2229acad6f04ffce0dab7de8a5"
  },
  {
    "url": "assets/js/29.713d1785.js",
    "revision": "bb33b8d3d1e24cb3c8d35b6c9dd0f165"
  },
  {
    "url": "assets/js/3.f832e103.js",
    "revision": "16dc53b3193da1ba30944cae01edf907"
  },
  {
    "url": "assets/js/4.18293290.js",
    "revision": "6ce83b4ad74f068944b9812218d5df21"
  },
  {
    "url": "assets/js/5.74a63ad4.js",
    "revision": "6f1df4ecdc7ce0e93f459df022efbe50"
  },
  {
    "url": "assets/js/6.4ab946a5.js",
    "revision": "173ebdb429f5f1319a45bbb6dbe50da5"
  },
  {
    "url": "assets/js/7.a93f3fa8.js",
    "revision": "d9a298cc029904cc4924057919224a06"
  },
  {
    "url": "assets/js/8.9922d7e0.js",
    "revision": "298f7407073cdbb275dbed63e653a470"
  },
  {
    "url": "assets/js/9.b9f2e0ad.js",
    "revision": "11c35e7a06bf588a4ae1fd0f6108fc28"
  },
  {
    "url": "assets/js/app.23792ed5.js",
    "revision": "5e7eb068d58a5cf1044ed30667ad666c"
  },
  {
    "url": "avatar.png",
    "revision": "90b6aee8a62a8cb449d13e1ae265785c"
  },
  {
    "url": "blogs/Git/Github下载提速方法.html",
    "revision": "0a2b6101f53245a5ba1d5b32bb2d48c3"
  },
  {
    "url": "blogs/Git/Git学习笔记.html",
    "revision": "600f62ec16de2ef06f262797c0122658"
  },
  {
    "url": "blogs/前端/Javascript进阶笔记.html",
    "revision": "5bf2483ffbb72bc29f82225c74c79843"
  },
  {
    "url": "blogs/前端/Nodejs版本管理Nvm安装和使用.html",
    "revision": "800acc3d0f06ed40be179c823db31687"
  },
  {
    "url": "blogs/前端/Vue2.html",
    "revision": "a36316dd1d6e96e2fb034571a671e211"
  },
  {
    "url": "blogs/前端/Vue项目中style新特性.html",
    "revision": "b4be9c4281261bb9278d455097907e58"
  },
  {
    "url": "blogs/前端/Webpack配置项.html",
    "revision": "5aaa2971077aff40e6452df3d4ddb4e1"
  },
  {
    "url": "blogs/前端/前端面试题.html",
    "revision": "83e445219a5bc76bbbe2e8fe0a3c7747"
  },
  {
    "url": "blogs/基础原理/Base64/ASCII码对照表.png",
    "revision": "ab8bdee03a075463b110f45d2beb9f8c"
  },
  {
    "url": "blogs/基础原理/Base64/Base64编码对照表.png",
    "revision": "ae6d208da9a8730b93d6f530d1812e0d"
  },
  {
    "url": "blogs/基础原理/Base64/base64输出结果.png",
    "revision": "81311a3a43a18c3103f8bd373984900d"
  },
  {
    "url": "blogs/基础原理/Base64编码及原理.html",
    "revision": "0f10a86e25d57cfa74f237358d1538cf"
  },
  {
    "url": "blogs/开发工具/配置终端主题oh-my-zsh.html",
    "revision": "4ed4c91a7bd0b7b70042616c83a86e0f"
  },
  {
    "url": "blogs/数据库/MySQL/内连接.png",
    "revision": "e3f67c3530f3f89924b5444cd0d8970c"
  },
  {
    "url": "blogs/数据库/MySQL/右连接.png",
    "revision": "f59415c85793c49c07b11cecc94e8dc0"
  },
  {
    "url": "blogs/数据库/MySQL/子查询-单查询.png",
    "revision": "f61474ae58a3832ccec9bf59547a529f"
  },
  {
    "url": "blogs/数据库/MySQL/子查询-多查询.png",
    "revision": "76b6a41fc0903e62a4ebadff966f2e02"
  },
  {
    "url": "blogs/数据库/MySQL/左连接.png",
    "revision": "e3f67c3530f3f89924b5444cd0d8970c"
  },
  {
    "url": "blogs/数据库/MySQL/调用存储过程结果.png",
    "revision": "7a2387c0eece17ef23b8c6e9d1c1a153"
  },
  {
    "url": "blogs/数据库/MySQL笔记.html",
    "revision": "7644918800a448086270d274891a5440"
  },
  {
    "url": "blogs/网络协议/Http的强缓存和协商缓存.html",
    "revision": "ce1b0519a72a68fee90dffd083eff9ce"
  },
  {
    "url": "blogs/网络协议/Http的强缓存和协商缓存/http协商缓存Etag-1.png",
    "revision": "f1f1998c37aaf2ef5fd192be212c2fef"
  },
  {
    "url": "blogs/网络协议/Http的强缓存和协商缓存/http协商缓存Etag-2.png",
    "revision": "edcd42cd1ebd54384b8da1139cabd200"
  },
  {
    "url": "blogs/网络协议/Http的强缓存和协商缓存/http协商缓存Last-Modified-1.png",
    "revision": "fe9897bbe0c6386c997c0189af772ad3"
  },
  {
    "url": "blogs/网络协议/Http的强缓存和协商缓存/http协商缓存Last-Modified-2.png",
    "revision": "ea01a00021837f8aaca66accd2026c40"
  },
  {
    "url": "blogs/网络协议/Http的强缓存和协商缓存/http强缓存Expires-1.png",
    "revision": "26bcca9adf78b167e6f3b8ddb9fd1d99"
  },
  {
    "url": "blogs/网络协议/Http的强缓存和协商缓存/http强缓存Expires-2.png",
    "revision": "6af6a0fc40e0e3b9d75f36fb81119fb9"
  },
  {
    "url": "blogs/网络安全/Nginx防盗链技术.html",
    "revision": "4612883736e3fff0c43d6a06aa9d39bc"
  },
  {
    "url": "blogs/网络安全/Nginx防盗链技术/block.png",
    "revision": "fe00667499e12eedf60567c1a10bfea4"
  },
  {
    "url": "blogs/网络安全/Nginx防盗链技术/browser-ok.png",
    "revision": "c1e9207c2f5b9c6f3273666b1dc862aa"
  },
  {
    "url": "blogs/网络安全/Nginx防盗链技术/error.png",
    "revision": "7b9239e2d280fc629a2721a8046039d6"
  },
  {
    "url": "blogs/网络安全/Nginx防盗链技术/no-block.png",
    "revision": "516bb62c3ee66cec9a6354c880395de1"
  },
  {
    "url": "blogs/网络安全/Nginx防盗链技术/ok.png",
    "revision": "b797f25683434b0d0035aab77daba6d0"
  },
  {
    "url": "blogs/项目部署/Jenkins中gitee配置webhooks教程.png",
    "revision": "42981faaacd25ee8afc503fab1855b91"
  },
  {
    "url": "blogs/项目部署/Jenkins安装插件教程.png",
    "revision": "6edbac29f55eef15cca90f9c107578b5"
  },
  {
    "url": "blogs/项目部署/Jenkins新建任务教程1.png",
    "revision": "2e40a40723108bbdfebd934f22e19fc3"
  },
  {
    "url": "blogs/项目部署/Jenkins新建任务教程2.png",
    "revision": "d70abcd853faccdd528288ea75f8e537"
  },
  {
    "url": "blogs/项目部署/Jenkins新建任务教程3.png",
    "revision": "96fb402677cf5bb3bb3c5aa6e3021a59"
  },
  {
    "url": "blogs/项目部署/Jenkins新建任务教程4.png",
    "revision": "c5434dfebeb0b7e9821993e2d2abeee3"
  },
  {
    "url": "blogs/项目部署/Jenkins配置邮件通知教程1.png",
    "revision": "af824d96b22c19cdb080005f0f0a743c"
  },
  {
    "url": "blogs/项目部署/基于docker、docker-compose部署jenkins自动部署.html",
    "revision": "c551fd58e42ab816eb06928691b27b95"
  },
  {
    "url": "blogs/项目部署/基于vuepress搭建博客的过程一（环境篇）.html",
    "revision": "a9a7bad5ff842d062cbee214226a6ac6"
  },
  {
    "url": "blogs/项目部署/基于vuepress搭建博客的过程二（插件篇）.html",
    "revision": "80d0393c2aa340ece654c2569c1fbc63"
  },
  {
    "url": "blogs/项目部署/备份docker中的mysql数据库-参数.png",
    "revision": "828f7ee7f34f083738b2d9dd978c5ecb"
  },
  {
    "url": "blogs/项目部署/备份docker中的mysql数据库.html",
    "revision": "25754b7f9624f5fa83ba2e29364c23d2"
  },
  {
    "url": "categories/Git/index.html",
    "revision": "e9f2daaae0420289db14283b3554c373"
  },
  {
    "url": "categories/index.html",
    "revision": "eda756f010dce5aad55d8fc6a7da60bb"
  },
  {
    "url": "categories/前端/index.html",
    "revision": "42bc3928a2a24b1b03ea55200e024a9a"
  },
  {
    "url": "categories/基础原理/index.html",
    "revision": "92461277dd5844f5c9774e878354d50e"
  },
  {
    "url": "categories/开发工具/index.html",
    "revision": "febbb3410810368cf5fa7c7ad6f8c2cd"
  },
  {
    "url": "categories/数据库/index.html",
    "revision": "1cb87163e08a6e02dba106e2af921600"
  },
  {
    "url": "categories/网络协议/index.html",
    "revision": "f304838e46aa3686d80bdfc64a2f1b0c"
  },
  {
    "url": "categories/网络安全/index.html",
    "revision": "5b23194478557cc245f24b1f903d2895"
  },
  {
    "url": "categories/项目部署/index.html",
    "revision": "b0c93b37c0631ddb9262bc0ac552a74c"
  },
  {
    "url": "hero.png",
    "revision": "5367b9349d4e048235eeed50d9ef36df"
  },
  {
    "url": "index.html",
    "revision": "47d304fe7dc08c5f6ecbb6508ab67cfa"
  },
  {
    "url": "live2d/wanko/assets/moc/wanko.1024/texture_00.png",
    "revision": "10b7047251205db46fdac7632b5d4642"
  },
  {
    "url": "logo.png",
    "revision": "0d7b4559ca796daf744b5b9ac24925e5"
  },
  {
    "url": "pay-alipay.jpg",
    "revision": "360f3abbf3f5b52a44a7e5af425033d7"
  },
  {
    "url": "pay-wechat.jpg",
    "revision": "4786fb94d9082034f8d1deccc6c30296"
  },
  {
    "url": "resume/index.html",
    "revision": "7a43a09ae90d99ab3bd75fefe1cacc80"
  },
  {
    "url": "resume/static/css/style.css",
    "revision": "60c74cf17ec22127ece34d061e935e85"
  },
  {
    "url": "resume/static/fonts/demo.css",
    "revision": "43fc64a4933c89bdf465ded521fc3649"
  },
  {
    "url": "resume/static/fonts/demo.html",
    "revision": "0204ee798015874940c3cb8417704fa4"
  },
  {
    "url": "resume/static/fonts/iconfont.css",
    "revision": "a212196ec2252c872ac1ff4fcb1d4ac8"
  },
  {
    "url": "resume/static/fonts/iconfont.eot",
    "revision": "5baa735872e59d9b6b56f1ef4a81afa9"
  },
  {
    "url": "resume/static/fonts/iconfont.svg",
    "revision": "4f52f7768b9c122025655a9da7890032"
  },
  {
    "url": "resume/static/fonts/iconfont.ttf",
    "revision": "6707f39bae69bc63242bf2b15c10ca05"
  },
  {
    "url": "resume/static/fonts/iconfont.woff",
    "revision": "b32e086c80e786963cca457ba13686f5"
  },
  {
    "url": "resume/static/image/avatar-default.png",
    "revision": "0d7b4559ca796daf744b5b9ac24925e5"
  },
  {
    "url": "resume/static/image/bg.jpg",
    "revision": "b45383a965e3118eb53760399a73f771"
  },
  {
    "url": "resume/static/js/modal.js",
    "revision": "e57a9e9a29e237be3c9692383fdd7767"
  },
  {
    "url": "resume/static/js/script.js",
    "revision": "c1c45a853c77c6b26f2dd2caaefb7140"
  },
  {
    "url": "tag/Base64/index.html",
    "revision": "85e5ddb223b20444a51a1db483168ec6"
  },
  {
    "url": "tag/Docker/index.html",
    "revision": "32dca964bed2fc546cbefee6e48b835c"
  },
  {
    "url": "tag/Git/index.html",
    "revision": "cd9ce6793fb3e19769165fa1d7155a46"
  },
  {
    "url": "tag/Github/index.html",
    "revision": "788e1d40ec95d9524881ee2c86caa247"
  },
  {
    "url": "tag/Http/index.html",
    "revision": "adca3316780a83e396aafb045b114a34"
  },
  {
    "url": "tag/index.html",
    "revision": "f7142941ef9508a1a068ea11d472b72a"
  },
  {
    "url": "tag/Javascript/index.html",
    "revision": "f714d382e185c7172be1e02ad356e179"
  },
  {
    "url": "tag/Jenkins/index.html",
    "revision": "f47b56b8498d9135680392d0189233ae"
  },
  {
    "url": "tag/MySQL/index.html",
    "revision": "61dd73d37e7a9d9d5fb1f1084c911315"
  },
  {
    "url": "tag/Nginx/index.html",
    "revision": "64cd507a18cb0bafd516f539f9f9c857"
  },
  {
    "url": "tag/Nvm/index.html",
    "revision": "439be2b28c18af0a7951740754d7b3c0"
  },
  {
    "url": "tag/oh-my-zsh/index.html",
    "revision": "c41b51e96044864f5953609ef7799940"
  },
  {
    "url": "tag/react/index.html",
    "revision": "02cbee3bd78c330e387312ef0607f72e"
  },
  {
    "url": "tag/vue/index.html",
    "revision": "4d7dde52bc74d6af8722869504b81352"
  },
  {
    "url": "tag/vuepress/index.html",
    "revision": "0a8ba26d4e3b5614d363b32fc2642980"
  },
  {
    "url": "tag/webpack/index.html",
    "revision": "d0126854c06d4227449913d405775053"
  },
  {
    "url": "tag/前端/index.html",
    "revision": "4a5b99715d228c037d913abdaa8f0638"
  },
  {
    "url": "tag/开发工具/index.html",
    "revision": "7539b91654a1d633007e5e62132fd688"
  },
  {
    "url": "tag/数据库/index.html",
    "revision": "5c1c26fbdc7cbad56654010b2341e283"
  },
  {
    "url": "tag/缓存/index.html",
    "revision": "70b11775e7ef7a648070e32cc8bfa26c"
  },
  {
    "url": "tag/网络安全/index.html",
    "revision": "c19e60acae3e15fbad4882150755cf59"
  },
  {
    "url": "timeline/index.html",
    "revision": "77ffcad04647c00e395cce47a589fd0b"
  }
].concat(self.__precacheManifest || []);
workbox.precaching.precacheAndRoute(self.__precacheManifest, {});
addEventListener('message', event => {
  const replyPort = event.ports[0]
  const message = event.data
  if (replyPort && message && message.type === 'skip-waiting') {
    event.waitUntil(
      self.skipWaiting().then(
        () => replyPort.postMessage({ error: null }),
        error => replyPort.postMessage({ error })
      )
    )
  }
})
