$(document).ready(function () {
$(".blog-nav-item a[href='" + location.href.substring(location.href.lastIndexOf("/") + 1, 255) + "']").addClass("active");
});