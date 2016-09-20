## 视频下载地址

https://pan.baidu.com/s/1ge7zW5P



# HTML

HTML 是用来描述网页的一种语言。或者说是浏览器能直接解析的一种文本格式。



## 一个简单的HTML页面＝

```HTML
<!DOCTYPE html>
<html>
  <head>
	<title>这里是标题</title>
    <meta charset="utf-8" />
  </head>
  <body>
	这里是存放内容的地方
  </body>
</html>
```

我们看到这个html的结构是

* html
  * head
    * title
    * meta
  * body

`<!DOCTYPE html>` 定义文档类型。

`html` HTML根标签

`<head>...</head>` 定义头部

`<body>...</body>` 定义文档主体部分

`<title>...</title>` 标题

`meta`标签的charset属性表示页面使用什么编码解析，我们开发的程序基本都是使用utf-8编码。



## HTML5 & HTML

HTML5是HTML最新的一个版本，目前常用的HTML指的是HTML4,对于我们来说，HTML4和HTML5我们就认为HTML5比HTML4多一些标签即可。



## HTML标签

html由各种标签组成，比方说`<br/>,<hr/>,<h1>,<h2>`等。

HTML5全部标签: http://www.w3school.com.cn/tags/index.asp

HTML详细入门: http://www.w3school.com.cn/html/index.asp

## 常用的HTML标签

```html
<!-- 这个是html里面的注释 -->
<title>标题</title>

<h1>h1</h1>
<h2>h2</h2>
<h3>h3</h3>
<h4>h4</h4>
<h5>h5</h5>
<h6>h6</h6>

<!--横线-->
<hr/>

<!--有序列表-->
<ol>
	<li>123</li>
</ol>
<!--无序列表-->
<ul>
	<li>123</li>
</ul>

<!--块-->
<div></div>

<!--图片-->
<img src="" />

<p>一段文字</p>

<!--文本输入框-->
<input type="text" />

<button>按钮</button>

<!--表格-->
<table border="1">
  <tr><!--第一行-->
    <td>第1列</td>
    <td>第2列</td>
    <td>第3列</td>
    <td>第4列</td>
  </tr>
  <tr><!--第二行-->
    <td>第1列</td>
    <td>第2列</td>
    <td>第3列</td>
    <td>第4列</td>
  </tr>
</table>
```

块级标签：独占一行

行级标签：共享一行





# 小作业

1. 使用pull request提交作业

2. 实现一个页面，页面表包含 帐户:文本框，密码:文本框，登录按钮,它们之间需要换行

3. 利用表格，实现一个乘法口诀。效果如下

   | 1 * 1 = 1 |           |           |
   | --------- | --------- | --------- |
   | 1 * 2 = 2 | 2 * 2 = 4 |           |
   | 1 * 3 = 3 | 2 * 3 = 6 | 3 * 3 = 9 |