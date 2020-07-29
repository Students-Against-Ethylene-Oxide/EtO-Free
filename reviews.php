<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no">
  <title> EtO-Free Skincare </title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="styles.css">
  <script type="text/javascript" src="javascript.js"></script>
</head>

<body>
  <?php include 'header.php' ?>

  <p id='disclaimer'>
    ***At the moment, we have no content available for viewing. Please check back again later for any changes.  </p>
  <div class="reviews-page">
    <div id="filters">
      <span>
        <button id="sort-by"
          onclick="change('sort-drop');"
          ontouchstart="change('sort-drop');">
          Sort <i class="fa fa-chevron-down"></i></button>
        <div id="sort-drop">
          <button
            class="sort-by"
            onclick="sortBy('data-name'); change('sort-drop');"
            ontocuhstart="sortBy('data-name'); change('sort-drop');">
            A to Z </button>
          <button
            class="sort-by"
            onclick="sortBy('data-company'); change('sort-drop');"
            ontocuhstart="sortBy('data-company'); change('sort-drop');">
            By Company </button>
          <button
            class="sort-by"
            onclick="sortBy('data-prodtype'); change('sort-drop');"
            ontocuhstart="sortBy('data-prodtype'); change('sort-drop');">
            By Product </button>
          <button
            class="sort-by"
            onclick="sortBy('data-date'); change('sort-drop');"
            ontocuhstart="sortBy('data-date'); change('sort-drop');">
            By Release Date </button>
        </div>
      </span>

      <button
        href="#reviews-sidebar"
        onclick="document.getElementById('reviews-sidebar').scrollIntoView();"
        ontouchstart="document.getElementById('reviews-sidebar').scrollIntoView();">
        <i class='fa fa-filter'></i> Filters </button>
    </div>
    <div id="reviews-main">
      <span
        class="card"
        data-company="bhbc"
        data-date="2016-08-10T11:30:21.000Z"
        data-name="Badger Healthy Body Care Tea Tree Oil"
        data-prodtype="cleanser"
        data-skintype="oily">
        3 Badger Healthy Body Care Tea Tree Oil</span>
      <span
        class="card"
        data-company="so"
        data-date="2016-08-10T17:30:21.000Z"
        data-name="Sia Botanics Facial Cleanser"
        data-prodtype="cleanser"
        data-skintype="dry">
        9 Sia Botanics Facial Cleanser</span>
      <span
        class="card"
        data-company="ji"
        data-date="2016-08-10T16:30:21.000Z"
        data-name="Jane Iredale Niacinamide Serum"
        data-prodtype="treatment"
        data-skintype="combo">
        8 Jane Iredale Niacinamide Serum</span>
      <span
        class="card"
        data-company="sb"
        data-date="2016-08-10T09:30:21.000Z"
        data-name="SkinOwl Rosehip Oils"
        data-prodtype="cleanser"
        data-skintype="normal">
        1 SkinOwl Rosehip Oils</span>
      <span
        class="card"
        data-company="thesis"
        data-date="2016-08-10T10:30:21.000Z"
        data-name="Badger Healthy Body Care Tea Tree Oil"
        data-prodtype="sunscreen"
        data-skintype="oily">
        2 Badger Healthy Body Care Tea Tree Oil</span>
      <span
        class="card"
        data-company="fab"
        data-date="2016-08-10T12:30:21.000Z"
        data-name="Sia Botanics Facial Cleanser"
        data-prodtype="exfoliant"
        data-skintype="dry">
        4 Sia Botanics Facial Cleanser</span>
      <span
        class="card"
        data-company="nat"
        data-date="2016-08-10T13:30:21.000Z"
        data-name="Jane Iredale Niacinamide Serum"
        data-prodtype="moisturizer"
        data-skintype="combo">
        5 Jane Iredale Niacinamide Serum</span>
      <span
        class="card"
        data-company="bhbc"
        data-date="2016-08-10T20:30:21.000Z"
        data-name="SkinOwl Rosehip Oils"
        data-prodtype="moisturizer"
        data-skintype="normal">
        12 SkinOwl Rosehip Oils</span>
      <span
        class="card"
        data-company="ji"
        data-date="2016-08-10T14:30:21.000Z"
        data-name="Badger Healthy Body Care Tea Tree Oil"
        data-prodtype="exfoliant"
        data-skintype="oily">
        6 Badger Healthy Body Care Tea Tree Oil</span>
      <span
        class="card"
        data-company="sb"
        data-date="2016-08-10T19:30:21.000Z"
        data-name="Sia Botanics Facial Cleanser"
        data-prodtype="sunscreen"
        data-skintype="dry">
        11 Sia Botanics Facial Cleanser</span>
      <span
        class="card"
        data-company="so"
        data-date="2016-08-10T15:30:21.000Z"
        data-name="Jane Iredale Niacinamide Serum"
        data-prodtype="treatment"
        data-skintype="combo">
        7 Jane Iredale Niacinamide Serum</span>
      <span
        class="card"
        data-company="fab"
        data-date="2016-08-10T18:30:21.000Z"
        data-name="SkinOwl Rosehip Oils"
        data-prodtype="treatment"
        data-skintype="normal">
        10 SkinOwl Rosehip Oils</span>
    </div>
    <div id="reviews-sidebar">
      <button
        onclick="clearFilters();">
        Clear Filters </button>
      <span>
        <input id="filter-input"
          type="text"
          placeholder="Search reviews by name"
          onkeyup="filterOut();" />
        <button
          onclick="resetFilters()">
          &#10005; </button></span>
      <a id="accordion1"
        class="accordion"
        onclick="change('skin-type'); change('accordion1');"
        ontouchstart="change('skin-type'); change('accordion1');">
        Skin Type </a>
      <div id="skin-type"
        class="panel">
        <button
          class="tag"
          onclick="filter.call(this, 'data-skintype', 'oily');"
          data-click="no">
          Oily </button>
        <button
          class="tag"
          onclick="filter.call(this, 'data-skintype', 'dry');"
          data-click="no">
          Dry </button>
        <button
          class="tag"
          onclick="filter.call(this, 'data-skintype', 'combo');"
          data-click="no">
          Combination </button>
        <button
          class="tag"
          onclick="filter.call(this, 'data-skintype', 'normal');"
          data-click="no">
          Normal </button>
        <button
          class="tag">
          <a
            class="links"
            href="https://www.youtube.com/watch?v=vic-EMOivpA&app=desktop" target="_blank">
            <b> Help! I don't know what my skin type is! </b></a></button>
      </div>

      <a id="accordion2"
        class="accordion"
        onclick="change('product-type'); change('accordion2');"
        ontouchstart="change('product-type'); change('accordion2');">
        Product Type </a>
      <div id="product-type"
        class="panel">
        <button
          class='tag'
          onclick="filter.call(this, 'data-prodtype', 'cleanser');"
          data-click="no">
          Cleansers </button>
        <button
          class='tag'
          onclick="filter.call(this, 'data-prodtype', 'treatment');"
          data-click="no">
          Exfoliants </button>
        <button
          class='tag'
          onclick="filter.call(this, 'data-prodtype', 'moisturizer');"
          data-click="no">
          Moisturizers </button>
        <button
          class='tag'
          onclick="filter.call(this, 'data-prodtype', 'sunscreen');"
          data-click="no">
          Sunscreens </button>
        <button
          class='tag'
          onclick="filter.call(this, 'data-prodtype', 'exfoliant');"
          data-click="no">
          Treatments </button>
      </div>

      <a id="accordion3"
        class="accordion"
        onclick="change('company'); change('accordion3');"
        ontouchstart="change('company'); change('accordion3');">
        Company </a>
      <div id="company"
        class="panel">
        <button
          class='tag'
          onclick="filter.call(this, 'data-company', 'bhbc');"
          ontouchstart="filter.call(this, 'data-company', 'bhbc');"
          data-click="no">
          Badger Healthy Body Care</button>
        <button
          class='tag'
          onclick="filter.call(this, 'data-company', 'ji');"
          ontouchstart="filter.call(this, 'data-company', 'ji');"
          data-click="no">
          Jane Iredale</button>
        <button
          class='tag'
          onclick="filter.call(this, 'data-company', 'sb');"
          ontouchstart="filter.call(this, 'data-company', 'sb');"
          data-click="no">
          Sia Botanics</button>
        <button
          class='tag'
          onclick="filter.call(this, 'data-company', 'so');"
          ontouchstart="filter.call(this, 'data-company', 'so');"
          data-click="no">
          SkinOwl</button>
        <button
          class='tag'
          onclick="filter.call(this, 'data-company', 'fab');"
          ontouchstart="filter.call(this, 'data-company', 'fab');"
          data-click="no">
          First Aid Beauty</button>
        <button
          class='tag'
          onclick="filter.call(this, 'data-company', 'thesis');"
          ontouchstart="filter.call(this, 'data-company', 'thesis');"
          data-click="no">
          Thesis</button>
        <button
          class='tag'
          onclick="filter.call(this, 'data-company', 'nat');"
          ontouchstart="filter.call(this, 'data-company', 'nat');"
          data-click="no">
          Naturium</button>
      </div>
    </div>
  </div>

  <?php include 'footer.php' ?>
</body>

<script>
  sortBy('data-name');
</script>

</html>
