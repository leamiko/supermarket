SuperMarket
===========

这是一个基于ThinkPHP的超市管理系统。


模型分层，中间加了一层Service层，用于处理业务逻辑，
但是分层并不彻底，因为即使是业务逻辑层，也直接从$_POST等获取所需参数等，

1、商品条形码扫描
2、支持权限管理->不同了员工拥有不同的权限
3、支持连锁分店->各个分店共用商品信息库，各个分店拥有各自的销售记录（还未完成）
4、万条商品信息
5、详细的入库、出库流程（还未完成）
6、供货商管理->不同的供货商有相同的产品（一边对比商品销售）,一个供货商可以提供多个商品。



2013.4.24   完成分店管理，完成员工管理（支持各分店负责人管理各自员工），完善商品分类管理。
2013.4.25   完成供货商管理（供货商列表、添加、编辑、删除、搜索该供货商的商品信息）