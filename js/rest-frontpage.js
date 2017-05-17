//JUHA.BLOG
var blogPostsContainer = document.getElementById("juhablog-posts-container");

if (blogPostsContainer) {
  jQuery(document).ready(function() {
    var ourRequest = new XMLHttpRequest();
    ourRequest.open('GET', 'http://juha.blog/wp-json/wp/v2/posts?per_page=3');
    ourRequest.onload = function() {
      if (ourRequest.status >= 200 && ourRequest.status < 400) {
        var data = JSON.parse(ourRequest.responseText);
        console.log(data);
        createHTML(data);
        
      } else {
        console.log("We connected to the server, but it returned an error.");
      }
    };

    ourRequest.onerror = function() {
      console.log("Connection error");
    };

    ourRequest.send();
  });
}

function createHTML(postsData) {
  var ourHTMLString = '';
  for (i = 0; i < postsData.length; i++) {
    ourHTMLString += '<a target="_blank" href="' + postsData[i].link + '"><div class="nostoblock linkkiblock">' +'<h3>' + postsData[i].title.rendered + '</h3><p class="blog-label"><i class="fa fa-wordpress"></i> Juha.Blog</p></div></a>';

  }
  blogPostsContainer.innerHTML = ourHTMLString;
}

//RESEPTIT.BLOG

var reseptitblogPostsContainer = document.getElementById("reseptitblog-posts-container");

if (reseptitblogPostsContainer) {
  jQuery(document).ready(function() {
    var ourRequest2 = new XMLHttpRequest();
    ourRequest2.open('GET', 'http://reseptit.blog/wp-json/wp/v2/posts?per_page=3');
    ourRequest2.onload = function() {
      if (ourRequest2.status >= 200 && ourRequest2.status < 400) {
        var data2 = JSON.parse(ourRequest2.responseText);
        console.log(data2);
        createHTML2(data2);
        
      } else {
        console.log("We connected to the server, but it returned an error.");
      }
    };

    ourRequest2.onerror = function() {
      console.log("Connection error");
    };

    ourRequest2.send();
  });
}

function createHTML2(postsData2) {
  var ourHTMLString2 = '';
  for (i = 0; i < postsData2.length; i++) {
    ourHTMLString2+= '<a target="_blank" href="' + postsData2[i].link + '"><div class="nostoblock linkkiblock">' +'<h3>' + postsData2[i].title.rendered + '</h3><p class="blog-label"><i class="fa fa-spoon"></i> Reseptit.Blog</p></div></a>';

  }
  reseptitblogPostsContainer.innerHTML = ourHTMLString2;
}