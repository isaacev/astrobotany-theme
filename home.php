<!DOCTYPE html>
<html>
  <head>
    <title>Astrobotany</title>
    <link href="https://fonts.googleapis.com/css?family=Merriweather|Roboto+Condensed" rel="stylesheet">
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

      #featured {
        grid-column: 2 / span 6;
        grid-row: 2;
      }

      #latest {
        grid-column: 8 / span 4;
        grid-row: 2;
      }

      .preview {
        display: grid;
        grid-gap: 1rem;
      }

      .preview + .preview {
        margin-top: 2rem;
      }

      .preview figure {
        grid-row: 1;
      }

      .preview figure img {
        width: 100%;
        display: block;
      }

      .preview .header {
        grid-row: 1;
      }

      .preview .meta {
        margin-top: 2px;
        margin-bottom: .5rem;
        font-size: 1rem;
        font-family: 'Roboto Condensed', sans-serif;
      }

      .preview .categories {
        font-weight: 600;
        text-transform: uppercase;
      }

      .preview .categories a:link {
        text-decoration: none;
        color: black;
      }

      .preview .categories a:hover {
        text-decoration: underline;
      }

      .preview .break::before {
        content: "/";
        padding: 0 .5rem;
        color: silver;
      }

      .preview .timestamp {
        float: right;
        color: silver;
      }

      .preview h2.headline {
        font-size: 1.8rem;
        line-height: 2.4rem;
      }

      .preview h3.headline {
        font-size: 1.4rem;
        line-height: 2.1rem;
      }

      .preview .subheadline {
        margin-top: .5rem;
        font-weight: normal;
        color: #777;
      }

      #featured .preview {
        grid-template-columns: repeat(6, [col-start] 1fr);
      }

      #featured .preview figure {
        grid-column: 5 / span 2;
      }

      #featured .preview.featured figure {
        grid-column: 1 / span 6;
      }

      #featured .preview .header {
        grid-column: 1 / span 4;
      }

      #featured .preview.featured .header {
        grid-column: 1 / span 6;
        grid-row: 2;
      }

      #latest .preview {
        grid-template-columns: repeat(4, [col-start] 1fr);
      }

      #latest .preview figure {
        grid-column: 4 / span 1;
      }

      #latest .preview .header {
        margin-left: 2rem;
        grid-column: 1 / span 4;
      }

      #latest .preview figure + .header {
        grid-column: 1 / span 3;
      }
    </style>
  </head>
  <body>
    <main>
      <header>
        <h1 id="title">title</h1>
      </header>
      <section id="featured">
        <article class="preview featured">
          <figure>
            <img src="http://via.placeholder.com/1024x512">
          </figure>
          <div class="header">
            <div class="meta">
              <span class="categories"><a href="#">laborum</a> <span class="break"></span> <a href="#">minima</a></span>
              <span class="timestamp">5 days ago</span>
            </div>
            <h2 class="headline">Lorem ipsum dolor sit amet, consectetur adipisicing elit</h2>
            <h3 class="subheadline">Et harum quidem rerum facilis est et expedita distinctio</h3>
          </div>
        </article>
      </section>
      <section id="latest">
        <article class="preview">
          <figure>
            <img src="http://via.placeholder.com/512x512" />
          </figure>
          <div class="header">
            <div class="meta">
              <span class="categories"><a href="#">commodi</a></span>
              <span class="timestamp">3 hours ago</span>
            </div>
            <h3 class="headline">Ut enim ad minima veniam, quis nostrum exercitation</h3>
          </div>
        </article>
        <article class="preview">
          <div class="header">
            <div class="meta">
              <span class="categories"><a href="#">aperiam</a> <span class="break"></span> <a href="#">consectetur</a></span>
              <span class="timestamp">1 day ago</span>
            </div>
            <h3 class="headline">Sed quia consequuntur magni dolores eos qui ratione</h3>
          </div>
        </article>
      </section>
    </main>
  </body>
</html>
