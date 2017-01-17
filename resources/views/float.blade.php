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

    nav{
        position: absolute;
        left:0px;
        max-width: 200px;
        border: solid darkgrey 2px;

    }
    .debug{
        border:solid green 1px;
    }


	body {
        border:solid blue 1px;
		width:90%;
		max-width: 900px;
		margin: 0 auto;
	}

	p   {
        border:solid blue 1px;
		line-height: 1.5;
		word-spacing: 0.1rem;

	}

    img {
        border:solid blue 1px;
        float : right;
        margin-right: 30px;
    }
    .clearfix {
        overflow: auto;
    }
    section{
        border:solid green 2px;
        margin-left: 200px;
        padding: 20px;
    }

</style>
<body>

<h1>Simple Float Example</h1>

<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>

<div class="clearfix">

    <nav class="debug">
        <ul>
            <li>link1</li>
            <li>link2</li>
            <li>link3</li>
            <li>About</li>
            <li>Contact</li>

        </ul>
    </nav>
    <img src="http://lorempixel.com/400/200/sports" alt="Imatges Lorem">
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>

    <div id="section">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab accusantium adipisci beatae culpa
        facilis id, ipsa iste iusto magnam minus nam officia provident quod ratione totam voluptas voluptate, voluptatem
        voluptatibus! A amet assumenda beatae corporis error et fugiat, harum inventore iure libero mollitia nesciunt
        omnis perferendis, rerum ut. Ex, nihil.
    </div>
    <div id="section">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut culpa cumque deserunt eveniet fuga
        fugiat iste iure maiores non omnis, pariatur sint temporibus tenetur ullam.
    </div>
    <div id="section">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi blanditiis consectetur explicabo
        libero minima minus nulla officia, quasi sed voluptates. Dolor ducimus ea, eius est fugiat id ipsa maiores modi
        nihil officiis pariatur perferendis perspiciatis quaerat reiciendis repellendus reprehenderit repudiandae, totam
        unde vel velit? Alias esse hic magni nisi. Iure minima porro ullam? A aliquid, culpa eum hic laborum mollitia
        nemo nostrum odio quae sequi? Ex excepturi expedita fugit mollitia odio quis soluta, vel. Accusamus alias
        aliquid asperiores blanditiis consequuntur cum ducimus error facere ipsum laborum, libero minima, molestias
        officia optio praesentium quaerat quibusdam quis ratione repellat totam voluptate voluptatibus!
    </div>
    <div id="section">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab accusantium adipisci beatae culpa
        facilis id, ipsa iste iusto magnam minus nam officia provident quod ratione totam voluptas voluptate, voluptatem
        voluptatibus! A amet assumenda beatae corporis error et fugiat, harum inventore iure libero mollitia nesciunt
        omnis perferendis, rerum ut. Ex, nihil.
    </div>
    <div id="section">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut culpa cumque deserunt eveniet fuga
        fugiat iste iure maiores non omnis, pariatur sint temporibus tenetur ullam.
    </div>
    <div id="section">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi blanditiis consectetur explicabo
        libero minima minus nulla officia, quasi sed voluptates. Dolor ducimus ea, eius est fugiat id ipsa maiores modi
        nihil officiis pariatur perferendis perspiciatis quaerat reiciendis repellendus reprehenderit repudiandae, totam
        unde vel velit? Alias esse hic magni nisi. Iure minima porro ullam? A aliquid, culpa eum hic laborum mollitia
        nemo nostrum odio quae sequi? Ex excepturi expedita fugit mollitia odio quis soluta, vel. Accusamus alias
        aliquid asperiores blanditiis consequuntur cum ducimus error facere ipsum laborum, libero minima, molestias
        officia optio praesentium quaerat quibusdam quis ratione repellat totam voluptate voluptatibus!
    </div>


</div>

<div id="footer">
    @copyright Klavius inc.
</div>

</body>
</html>