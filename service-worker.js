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
    "revision": "2a64be9ab146f7a1b71126fda83db2fa"
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
    "url": "assets/js/1.3429795b.js",
    "revision": "5559d0a868b42ac2571e1e731560fb7e"
  },
  {
    "url": "assets/js/10.b8f0c4b7.js",
    "revision": "d98110dd6add4843c88e491e360c3fdf"
  },
  {
    "url": "assets/js/11.4f898893.js",
    "revision": "dedddd654aaa36a3597341441d50ab50"
  },
  {
    "url": "assets/js/12.1acd83fa.js",
    "revision": "74d0f259e6506d1475c5e79f4f3ca6eb"
  },
  {
    "url": "assets/js/13.eca9b149.js",
    "revision": "15d7bd929c27afbf1bbbb8ec71875a71"
  },
  {
    "url": "assets/js/14.afc68fa5.js",
    "revision": "1888347e51a3869a9c3ea89d08f42d4b"
  },
  {
    "url": "assets/js/15.f65d89f8.js",
    "revision": "0777572de8d113cb1ec30f7d31763dc5"
  },
  {
    "url": "assets/js/16.d870e667.js",
    "revision": "cb637b849acce7f79afbe49633aaedef"
  },
  {
    "url": "assets/js/17.0fb1e876.js",
    "revision": "f943db2d3061b5a245069c80954f7bcf"
  },
  {
    "url": "assets/js/18.d88d0a1c.js",
    "revision": "eb85b5231bfbdf4bf71ee4e74ca7fdd7"
  },
  {
    "url": "assets/js/19.4642e1ac.js",
    "revision": "ff976664f73b41f5885de2429297193c"
  },
  {
    "url": "assets/js/20.ff78927a.js",
    "revision": "73e6141cb572e88b4eb80a33f1ca4298"
  },
  {
    "url": "assets/js/21.1f241def.js",
    "revision": "d5696f66b99df28365bc2800920cea76"
  },
  {
    "url": "assets/js/22.48d189d0.js",
    "revision": "df79944cdc41c5f5d53f80612752872f"
  },
  {
    "url": "assets/js/23.624f5b9b.js",
    "revision": "5a4c50fb76b542bc560c17ab9303b152"
  },
  {
    "url": "assets/js/24.e36f7354.js",
    "revision": "69a704f9fefad9c593746be48cd88a9d"
  },
  {
    "url": "assets/js/25.c3207ce9.js",
    "revision": "7e77100800aaa978f57387d815a337ed"
  },
  {
    "url": "assets/js/3.adac2b2d.js",
    "revision": "e1a34f9975aede6112a1685c7e9c26f1"
  },
  {
    "url": "assets/js/4.eb7c3391.js",
    "revision": "28c56826d748e8967b1d3e0efa63350b"
  },
  {
    "url": "assets/js/5.61b62308.js",
    "revision": "d46bec710608154094f2a40459ed49ee"
  },
  {
    "url": "assets/js/6.da05cc87.js",
    "revision": "9e16173919d95360d85b171c4cfd51b3"
  },
  {
    "url": "assets/js/7.a6d2ff85.js",
    "revision": "77d8ee27c21836dbb5b88008144efe82"
  },
  {
    "url": "assets/js/8.153f53e3.js",
    "revision": "34f30858385e8800a9101d7325d87115"
  },
  {
    "url": "assets/js/9.cef57c90.js",
    "revision": "1d51d4ac4fbc638a514d4f02baad299d"
  },
  {
    "url": "assets/js/app.4ecf88e3.js",
    "revision": "3f140f6d9596df9532937653b8fed039"
  },
  {
    "url": "avatar.png",
    "revision": "90b6aee8a62a8cb449d13e1ae265785c"
  },
  {
    "url": "blogs/Git/Git学习笔记.html",
    "revision": "b3016f1f2bede89a1e3621f28e49784b"
  },
  {
    "url": "blogs/Jenkins/gitee配置webhooks教程.png",
    "revision": "42981faaacd25ee8afc503fab1855b91"
  },
  {
    "url": "blogs/Jenkins/基于docker、docker-compose部署jenkins自动部署.html",
    "revision": "0798e3fbec90eed121827994ac67a326"
  },
  {
    "url": "blogs/Jenkins/安装插件教程.png",
    "revision": "6edbac29f55eef15cca90f9c107578b5"
  },
  {
    "url": "blogs/Jenkins/新建任务教程1.png",
    "revision": "2e40a40723108bbdfebd934f22e19fc3"
  },
  {
    "url": "blogs/Jenkins/新建任务教程2.png",
    "revision": "d70abcd853faccdd528288ea75f8e537"
  },
  {
    "url": "blogs/Jenkins/新建任务教程3.png",
    "revision": "96fb402677cf5bb3bb3c5aa6e3021a59"
  },
  {
    "url": "blogs/Jenkins/新建任务教程4.png",
    "revision": "c5434dfebeb0b7e9821993e2d2abeee3"
  },
  {
    "url": "blogs/Jenkins/配置邮件通知教程1.png",
    "revision": "af824d96b22c19cdb080005f0f0a743c"
  },
  {
    "url": "blogs/vuepress/基于vuepress搭建博客的过程一（环境篇）.html",
    "revision": "13b62f971c3b99c6998591592c694cdd"
  },
  {
    "url": "blogs/vuepress/基于vuepress搭建博客的过程二（插件篇）.html",
    "revision": "53c5dff8c28654b9ceb64479323fe595"
  },
  {
    "url": "blogs/前端/Nodejs版本管理Nvm安装和使用.html",
    "revision": "15c7efe9a596c9564e28427ba3247996"
  },
  {
    "url": "blogs/前端/uni-app学习笔记.html",
    "revision": "2bcfe4407ffb87514e726c4d250e4c6d"
  },
  {
    "url": "blogs/前端/vue2.html",
    "revision": "8476020c05dd166ab19e17c87feb182d"
  },
  {
    "url": "blogs/前端/vue3.html",
    "revision": "0d9f73d03a329feffab31dab48e71ad5"
  },
  {
    "url": "blogs/前端/vue项目中style新特性.html",
    "revision": "05506ca62fd43f8d230d7857ef26efbe"
  },
  {
    "url": "blogs/前端/前端工具函数合集.html",
    "revision": "f6bf3d6f36957ac1fb667ee5f4480011"
  },
  {
    "url": "blogs/前端/项目.html",
    "revision": "666002cf2943f9f0133f7a3d0d14af03"
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
    "revision": "99e5ffe680912ca98aeef3ebcf9ab216"
  },
  {
    "url": "blogs/数据库/MySQL.html",
    "revision": "1e4e996e79734dcce43fdcf4db634139"
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
    "url": "categories/Git/index.html",
    "revision": "a2f5446d02f37f246b3e6d7276c6c3ac"
  },
  {
    "url": "categories/index.html",
    "revision": "a8aa27427d5703bed4639c5a42255868"
  },
  {
    "url": "categories/Jenkins/index.html",
    "revision": "f0fe526be193baf982c0980776e5ff00"
  },
  {
    "url": "categories/MySQL/index.html",
    "revision": "531ecb8650ee50f7a6e6d6b635ddf910"
  },
  {
    "url": "categories/前端/index.html",
    "revision": "ba439d69c46033903ffbadf92f45fa77"
  },
  {
    "url": "categories/基础原理/index.html",
    "revision": "28f4f8c4d4949b0584a54635c7e0ef85"
  },
  {
    "url": "hero.png",
    "revision": "5367b9349d4e048235eeed50d9ef36df"
  },
  {
    "url": "index.html",
    "revision": "fe0dde26a03e603e7971a46df27a5c1f"
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
    "url": "tag/Base64/index.html",
    "revision": "c4f6203863d3cb8acb999fb9ebe0fcc4"
  },
  {
    "url": "tag/css/index.html",
    "revision": "fa4ad7a869544abfe8fc6ab968ee57f0"
  },
  {
    "url": "tag/Docker/index.html",
    "revision": "08651ccb892a3bb13d5bc5acc43b5af6"
  },
  {
    "url": "tag/Git/index.html",
    "revision": "d6692a0568912c9ce41cb5c24fa205b3"
  },
  {
    "url": "tag/index.html",
    "revision": "db90011ea87e98bca5d3b9643bf50959"
  },
  {
    "url": "tag/Jenkins/index.html",
    "revision": "94bb944b2501adb38bf099df29c0975d"
  },
  {
    "url": "tag/MySQL/index.html",
    "revision": "2689d0edd9675d3f2b82059b1da4f6d5"
  },
  {
    "url": "tag/Nodejs/index.html",
    "revision": "98fb4bfca2621ace9f2a68cac117bca0"
  },
  {
    "url": "tag/Nvm/index.html",
    "revision": "a1b3e1a78307a1473202731a1796c261"
  },
  {
    "url": "tag/vue/index.html",
    "revision": "c072cd51576e33f4f6d487e54476dd42"
  },
  {
    "url": "tag/vuepress/index.html",
    "revision": "52b0d1b32c5b269ed609f0869b4e8405"
  },
  {
    "url": "tag/前端/index.html",
    "revision": "0225925d6055db71d56700f39c8ed0bf"
  },
  {
    "url": "tag/数据库/index.html",
    "revision": "438808d827b8540df02c1c4f60ed84ea"
  },
  {
    "url": "timeline/index.html",
    "revision": "b1e09d9e0ea8a5e34de7b006af1706f4"
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
