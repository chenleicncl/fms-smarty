var fms = require('fms')

fms.run({
    port: 3001,
    view: {
        templateDir: './view/',
        templatePluginDir: './plugin/',
        server: "http://127.0.0.1:1235",
        request: function (req, data) {
            data.PAGE_PATH = req.path
        }
    }
})

fms.view({
    title: '首页',
    type: 'get',
    url: '/',
    template: 'index.php',
    data: {
        news: [
            {
                title: "论数据约定在前后端配合中的重要性",
                link: '/news/detail/?id=1'
            },
            {
                title: "三星弯上瘾！Galaxy S7将有无数个版本",
                link: '/news/detail/?id=2'
            },
            {
                title: "太囧！门前1米无人盯防 郜林……竟然打偏了",
                link: '/news/detail/?id=3'
            }
        ],
        message: [
            {
                text: '使用 FMS 模拟 Smarty 能让前端快速编写后端模板',
                nickname: "Nimo"
            },
            {
                text: 'FMS的文档自动生成功能极大的提高了与后端的沟通效率',
                nickname: "Judy"
            },
            {
                text: '荆轲刺秦王',
                nickname: "Nima"
            }
        ]
    },
    res: {
        empty: {
            news: [],
            message: []
        }
    }
})

fms.view({
    title: "新闻页",
    type: 'get',
    url: '/news/',
    template: 'news.php',
    data: {
        news: [
            {
                title: "论数据约定在前后端配合中的重要性",
                link: '/news/detail/?id=1'
            },
            {
                title: "三星弯上瘾！Galaxy S7将有无数个版本",
                link: '/news/detail/?id=2'
            },
            {
                title: "太囧！门前1米无人盯防 郜林……竟然打偏了",
                link: '/news/detail/?id=3'
            },
            {
                title: "浙江老人游故宫迷路 靠太阳辨别方向走6天到天津",
                link: '/news/detail/?id=4'
            },
            {
                title: "陕西宝鸡女老师夜跑被害 嫌犯系拾荒者",
                link: '/news/detail/?id=5'
            },
            {
                title: "谈话被打断伤了自尊 枞阳一女教师持刀刺伤炊事员",
                link: '/news/detail/?id=6'
            }
        ]
    }
})


fms.view({
    title: "新闻详情页",
    type: 'get',
    url: '/news/detail/',
    template: 'news_detail.php',
    data: {
        title: "三星弯上瘾！Galaxy S7将有无数个版本",
        content: "HTC是机海战术的代表，其实三星也一点不弱，出个新机器就能衍生出五花八门的各种版本。<br>如果你在等待下一代的旗舰机Galaxy S7，恐怕会被搞得不知如何选择。"}
})

fms.view({
    title: "留言页",
    type: 'get',
    url: '/message/',
    template: 'message.php',
    data: {
        message: [
            {
                text: '使用 FMS 模拟 Smarty 能让前端快速编写后端模板',
                nickname: "Nimo"
            },
            {
                text: 'FMS的文档自动生成功能极大的提高了与后端的沟通效率',
                nickname: "Judy"
            },
            {
                text: '荆轲刺秦王',
                nickname: "Nima"
            }
        ]
    }
})

fms.ajax({
    title: '提交留言',
    type: 'post',
    url: '/send_message/',
    request: {
        nickname: "nimo",
        message: "留言内容"
    },
    res: {
        ok: {
            status: 'success'
        },
        err: {
            status: 'error',
            msg: 'Refused to submit'
        }
    }
})