# [fms](http://fms.help)-smarty

FMS 让前端在本地编写 Smarty 模板

[在线预览](http://smarty.fms.help)

[查看 fms.js](fms.js)

## 安装
```shell
npm install fms
# 或
npm install fms -g
```

## nodemon

建议使用 nodemon 启动 fms.js
```shell
npm install nodemon -g
```

## 启动 
 
```shell
# 启动 fms.js 并检测文件修改后自动重启
nodemon -w fms.js fms.js
```

## 启动后端渲染接口

> 请确保你的电脑中已安装 php cli。[php cli 安装教程](http://fms.help/install-php-cli.html)

```shell
php -S 127.0.0.1:1237 -t mock
```

- 首页 [http://127.0.0.1:3003/](http://127.0.0.1:3003/)
- 控制台 [http://127.0.0.1:3003/fms/](http://127.0.0.1:3003/fms/)
