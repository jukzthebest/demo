# demo
克隆该项目后，请先执行
- composer install
- 安装easySwoole（安装easyswoole教程请看文档）

## 使用前准备
请确保数修改好数据库配置，并存在以下表
```
CREATE TABLE `user_list` (
  `userId` int(11) NOT NULL AUTO_INCREMENT,
  `account` varchar(45) NOT NULL,
  `password` varchar(45) NOT NULL,
  `session` varchar(45) DEFAULT NULL,
  `addTime` int(11) NOT NULL,
  PRIMARY KEY (`userId`),
  UNIQUE KEY `userId_UNIQUE` (`userId`),
  UNIQUE KEY `account_UNIQUE` (`account`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
```
## 其他
- [项目主仓库](https://github.com/easy-swoole/easyswoole)
- [项目官网](https://www.easyswoole.com/)
- 官方QQ交流群 : **633921431**

- [捐赠](https://www.easyswoole.com/Manual/2.x/Cn/_book/donate.html)
    您的捐赠是对Swoole项目开发组最大的鼓励和支持。我们会坚持开发维护下去。 您的捐赠将被用于:
        
  - 持续和深入地开发
  - 文档和社区的建设和维护
