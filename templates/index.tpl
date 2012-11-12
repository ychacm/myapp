<html>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<head><title>php框架研究v1</title>
	<link rel="stylesheet" type="text/css" href="style/default.css" />
	</head>
	<body>
		<div id="mm">
			{section name=list loop=$arr}
  				<p>序号：{$arr[list].ysjId}</p>
      			标题：{$arr[list].ysjTitle}
      			{$arr[list].ysjText}
      			<img src="{$arr[list].imgurl}"></br>
  		    {/section}
		</div>
	</body>
</html>