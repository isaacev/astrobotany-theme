<!DOCTYPE html>
<html>
  <head>
    <title>Astrobotany</title>
    <style>
      html, body {
        margin: 0;
        padding: 0;
        font-size: 16px;
        font-family: 'Merriweather', serif;
      }

      main {
        width: 100%;
        display: grid;
        grid-template-columns: repeat(12, [col-start] 1fr);
        grid-gap: 1rem;
      }

      main > header {
        grid-column: 2 / span 10;
      }

      h1, h2, h3, h4, h5, h6, p, figure {
        margin: 0;
        padding: 0;
      }

      #title {
        margin: 1rem 0;
      }

      main > figure {
        grid-row: 2;
        grid-column: 2 / span 10;
      }

      main > figure img {
        width: 100%;
        display: block;
      }

      main > article {
        grid-row: 3;
        grid-column: 2 / span 10;
      }

      .header .meta {
        margin-top: 2px;
        margin-bottom: .5rem;
        font-size: 1rem;
        font-family: 'Roboto Condensed', sans-serif;
      }

      .header .categories {
        font-weight: 600;
        text-transform: uppercase;
      }

      .header .categories a:link {
        text-decoration: none;
        color: black;
      }

      .header .categories a:hover {
        text-decoration: underline;
      }

      .header .break::before {
        content: "/";
        padding: 0 .5rem;
        color: silver;
      }

      .header h2.headline {
        font-size: 1.8rem;
        line-height: 2.4rem;
      }

      .header h3.headline {
        font-size: 1.4rem;
        line-height: 2.1rem;
      }

      .header .subheadline {
        margin-top: .5rem;
        font-weight: normal;
        color: #777;
      }
    </style>
  </head>
  <body>
    <main>
      <header>
        <h1 id="title">title</h1>
      </header>
      <figure>
        <img src="http://via.placeholder.com/1536x512">
      </figure>
      <article>
        <div class="header">
          <div class="meta">
            <span class="categories"><a href="#">laborum</a> <span class="break"></span> <a href="#">minima</a></span>
          </div>
          <h2 class="headline">Lorem ipsum dolor sit amet, consectetur adipisicing elit</h2>
          <h3 class="subheadline">Et harum quidem rerum facilis est et expedita distinctio</h3>
        </div>
      </article>
    </main>
  </body>
</html>
