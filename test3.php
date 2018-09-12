<?php 







?>

<!-- Grid row -->
<div class="row">

  <!-- Grid column -->
  <div class="column mb-4 px-2">

    <!--Card Primary-->
    <div class="card indigo text-center z-depth-2">
      <div class="card-body">
        <p class="white-text mb-0">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti
          atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique
          sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga.</p>
      </div>
    </div>
    <!--/.Card Primary-->

  </div>
  <!-- Grid column -->

  <!-- Grid column -->
  <div class="column mb-4 px-2">

    <!--Card Primary-->
    <div class="card danger-color text-center z-depth-2">
      <div class="card-body">
        <p class="white-text mb-0">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti
          atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique
          sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga.</p>
      </div>
    </div>
    <!--/.Card Primary-->

  </div>
  <!-- Grid column -->

  <!-- Grid column -->
  <div class="column mb-4 px-2">

    <!--Card Primary-->
    <div class="card info-color text-center z-depth-2">
      <div class="card-body">
        <p class="white-text mb-0">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti
          atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique
          sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga.</p>
      </div>
    </div>
    <!--/.Card Primary-->

  </div>
  <!-- Grid column -->

  <!-- Grid column -->
  <div class="column mb-4 px-2">

    <!--Card Primary-->
    <div class="card mdb-color text-center z-depth-2">
      <div class="card-body">
        <p class="white-text mb-0">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti
          atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique
          sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga.</p>
      </div>
    </div>
    <!--/.Card Primary-->

  </div>
  <!-- Grid column -->

</div>
<!-- Grid row -->

<style>
    @media (max-width: 767px) {
        .column {
            width: 100%;
        }
    }
    @media (min-width: 768px) and (max-width: 1024px) {
        .column {
            width: 50%;
        }
    }
    @media (min-width: 1025px) {
        .column {
            width: 25%;
        }
    }



/* ------------------------------------------------------------------------------------ */



    /* // Media queries
// Bootstrap media queries
// Since Bootstrap is developed to be mobile first, we use a handful of media queries to create sensible breakpoints for our layouts and interfaces. These breakpoints are mostly based on minimum viewport widths and allow us to scale up elements as the viewport changes.

// Bootstrap primarily uses the following media query ranges—or breakpoints—in our source Sass files for our layout, grid system, and components.

// Media queries as responsive breakpoints
// CSS
// Extra small devices (portrait phones, less than 576px)
// No media query since this is the default in Bootstrap */

/* // Small devices (landscape phones, 576px and up) */
@media (min-width: 576px) { ... }

/* // Medium devices (tablets, 768px and up) */
@media (min-width: 768px) { ... }

/* // Large devices (desktops, 992px and up) */
@media (min-width: 992px) { ... }

/* // Extra large devices (large desktops, 1200px and up) */
@media (min-width: 1200px) { ... }


/* Media queries available via Sass mixins
Since we write our source CSS in Sass, all our media queries are available via Sass mixins:

CSS */
@include media-breakpoint-up(xs) { ... }
@include media-breakpoint-up(sm) { ... }
@include media-breakpoint-up(md) { ... }
@include media-breakpoint-up(lg) { ... }
@include media-breakpoint-up(xl) { ... }

/* Example usage: */
@include media-breakpoint-up(sm) {
  .some-class {
    display: block;
  }
}
/* // Other direction of responsive breakpoints
// We occasionally use media queries that go in the other direction (the given screen size or smaller):

// CSS
// Extra small devices (portrait phones, less than 576px) */
@media (max-width: 575px) { ... }

/* // Small devices (landscape phones, less than 768px) */
@media (max-width: 767px) { ... }

/* // Medium devices (tablets, less than 992px) */
@media (max-width: 991px) { ... }

/* // Large devices (desktops, less than 1200px) */
@media (max-width: 1199px) { ... }

/* // Extra large devices (large desktops)
// No media query since the extra-large breakpoint has no upper bound on its width
// Media queries Sass mixins example
// Once again, these media queries are also available via Sass mixins:

// CSS */
@include media-breakpoint-down(xs) { ... }
@include media-breakpoint-down(sm) { ... }
@include media-breakpoint-down(md) { ... }
@include media-breakpoint-down(lg) { ... }

/* // Minimal and maximum media queries
// There are also media queries and mixins for targeting a single segment of screen sizes using the minimum and maximum breakpoint widths.

// CSS
// Extra small devices (portrait phones, less than 576px) */
@media (max-width: 575px) { ... }

/* // Small devices (landscape phones, 576px and up) */
@media (min-width: 576px) and (max-width: 767px) { ... }

/* // Medium devices (tablets, 768px and up) */
@media (min-width: 768px) and (max-width: 991px) { ... }

/* // Large devices (desktops, 992px and up) */
@media (min-width: 992px) and (max-width: 1199px) { ... }

/* // Extra large devices (large desktops, 1200px and up) */
@media (min-width: 1200px) { ... }

/* Minimal - maximum media queries Sass mixins
These media queries are also available via Sass mixins:

CSS */
@include media-breakpoint-only(xs) { ... }
@include media-breakpoint-only(sm) { ... }
@include media-breakpoint-only(md) { ... }
@include media-breakpoint-only(lg) { ... }
@include media-breakpoint-only(xl) { ...}

@media (min-width: 768px) and (max-width: 1199px) { ... }

@include media-breakpoint-between(md, xl) { ...} 

/* ------------------------------------------------------------------------------------ */


</style>