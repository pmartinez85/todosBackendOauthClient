<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport"
		  content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Document</title>
</head>


<style>

	.header{
		background-color: indianred;
		padding:10px;
		margin: 10px;
		flex: 100%;
	}

	article {
		min-width: 200px;

	}
	.container {
		display: flex;
		overflow: auto;
	}

	.clearfix {
		overflow: auto;
	}
	section{
		display: flex;
		flex-direction: row;
	}
	.flex-wrap {
		display: flex;
		flex-direction: row;
		flex-wrap: wrap;
	}

	nav{
		background-color: greenyellow;
		left:0px;
		width: 200px;
	}
	footer{
		border:solid blue 1px;
		bottom: 0px;
		height:100px;
		background-color: cornflowerblue;
	}


</style>

<body>

<div class="header">
	<h1>Flebox Layout Example</h1>
</div>

<section>

	<nav>
		<ul>
			<li>link1</li>
			<li>link2</li>
			<li>link3</li>
			<li>About</li>
			<li>Contact</li>

		</ul>
	</nav>
	<section class="flex-wrap">
		<article>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Culpa, in!</article>
		<article>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Culpa, in!</article>
		<article>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Culpa, in!</article>
		<article>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Culpa, in!</article>
		<article>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Culpa, in!</article>
		<article>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Culpa, in!</article>

	</section>
</section>

</div>

<footer>
	@copyright Klavius inc.
</footer>

</body>
</html>
