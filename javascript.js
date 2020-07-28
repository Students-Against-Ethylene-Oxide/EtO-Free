
var filters = [];
var cards = document.getElementsByClassName('card');
var tags = document.getElementsByClassName('tag');

function change(object) {
  var element = document.getElementById(object);

  if (element.classList) {
    element.classList.toggle("change");
  } else {
    // For IE9
    var classes = element.className.split(" ");
    var i = classes.indexOf("change");

    if (i >= 0)
      classes.splice(i, 1);
    else
      classes.push("change");
      element.className = classes.join(" ");
  }
}

function changeThis() {
  console.log('called');
  if (this.classList) {
    this.classList.toggle("change");
  } else {
    // For IE9
    var classes = this.className.split(" ");
    var i = classes.indexOf("change");

    if (i >= 0)
      classes.splice(i, 1);
    else
      classes.push("change");
      this.className = classes.join(" ");
  }
}

function filterOut() {
  var input, content;
  input = document.getElementById('filter-input').value.trim();

  for (var i = 0; i < cards.length; i++) {
    content = cards[i].innerHTML.toLowerCase();
    if (!content.includes(input.toLowerCase())) {
      cards[i].style.display = "none";
    } else {
      cards[i].style.display = "flex";
    }
  }
}

function filter(attr, attrValue) {
  var clicked = this.getAttribute('data-click');
  var selector = "[" + attr + "=" + attrValue + "]";
  document.getElementById('filter-input').value = '';

  if (clicked == 'no') {
    if (!filters.includes(selector)) {
      filters.push(selector);
    }

    for (var i = 0; i < cards.length; i++) {
      cards[i].style.display = 'none';
    }

    for (var i = 0; i < filters.length; i++) {
      var selected = document.querySelectorAll(filters[i]);

      for (var a = 0; a < selected.length; a++) {
        selected[a].style.display = 'flex';
      }
    }
    this.setAttribute('data-click', 'yes');
    changeThis.call(this);
  } else {
    filters.pop(selector);

    if (!filters.length == 0) {
      for (var i = 0; i < cards.length; i++) {
        cards[i].style.display = 'none';
      }

      for (var i = 0; i < filters.length; i++) {
        var selected = document.querySelectorAll(filters[i]);

        for (var a = 0; a < selected.length; a++) {
          selected[a].style.display = 'flex';
        }
      }
    } else {
      for (var i = 0; i < cards.length; i++) {
        cards[i].style.display = 'flex';
      }
    }
    this.setAttribute('data-click', 'no');
    changeThis.call(this);
  }
}

function clearFilters() {
  filters = [];
  document.getElementById('filter-input').value = '';
  for (var i = 0; i < cards.length; i++) {
    cards[i].style.display = 'flex';
  }
  for (var i = 0; i < tags.length; i++) {
    if (tags[i].className.includes('change')) {
      tags[i].classList.toggle('change');
      console.log('tag includes class "change"');
    }
  }
}

function sortBy(attr) {
  var items = document.getElementsByClassName('card');
  // magically coerce into an array first
  items = Array.prototype.slice.call(items);

  items.sort(function(a, b) {
    return a.getAttribute(attr).localeCompare(b.getAttribute(attr));
  });

  for(var i = 0; i < items.length; i++) {
    // store the parent node so we can reattach the item
    var parent = items[i].parentNode;
    // detach it from wherever it is in the DOM
    var detatchedItem = parent.removeChild(items[i]);
    // reattach it.  This works because we are iterating
    // over the items in the same order as they were re-
    // turned from being sorted.
    parent.appendChild(detatchedItem);
  }
}
