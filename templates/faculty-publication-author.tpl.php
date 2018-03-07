<div class="faculty-publication-listing">
  <h3><?php
    $publication_authors = array();
    foreach ($authors as $author) {
      $publication_authors[] = l($author->name, $author->uri);
    }
    print join(', ', $publication_authors);
    print ' ' . $publicationYear;
  ?></h3>
  <div class="faculty-publication-name">
    <?php print l($name, 'https://doi.org/' . $doi); ?>
  </div>
  <div class="faculty-publication-pub-name">
    <?php print $publishedIn->name; ?>
  </div>

  <div class="faculty-publication-doi">
    DOI: <?php print l($doi, 'https://doi.org/' . $doi); ?>
  </div>
</div>
