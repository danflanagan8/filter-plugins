See this article: https://blog.theodo.fr/2018/01/responsive-iframes-css-trick/

This is prolly the css you want:

.filter-wrap-iframes {
  position: relative;
  overflow: hidden;
  padding-top: 56.25%;
}

.filter-wrap-iframes iframe {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  border: 0;
}
