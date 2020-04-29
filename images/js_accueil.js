$(".ui.sidebar")
 .first()
 .sidebar("attach events", ".ui.icon.item .bars");

$(".ui.icon.item .bars").removeClass("disabled");

$(".dropdown").dropdown({
 transition: "slide down"
});

$(".logo.item").popup({
 position: "bottom center",
 target: ".bars.icon",
 title: "Off-Canvas Menu",
 content: "Click here to reveal a hidden menu."
});

$(".small.modal")
 .modal({
  blurring: true
 })
 .modal("setting", "transition", "fade")
 .modal("setting", "closable", false)
 .modal("attach events", ".blue.button", "show");

$(".ui.huge.star.rating")
 .rating({
  initialRating: 1,
  maxRating: 5,
  clearable: true,
  icon: "award",
  onRate: function() {
   $("body").toast({
    class: "success",
    title: "Thanks!",
    showIcon: "thumbs up",
    displayTime: 3000,
    message: "Thank you for your rating!",
    position: "top right"
   })
  }
})
;

$(".ui.right.search.item").search({
 apiSettings: {
  url: "//api.github.com/search/repositories?q={query}+user:daemondevin"
 },
 fields: {
  results: "items",
  title: "name",
  url: "html_url"
 },
 minCharacters: 3
});

$(".custom.link.item").popup({
 popup: $(".custom.popup"),
 on: "hover",
 inline: true,
 hoverable: true,
 position: "bottom center",
 delay: {
  show: 300,
  hide: 800
 }
});

$("#toast").click(function() {
 $("body").toast({
  class: "success",
  title: "Awesome!",
  showIcon: "egg",
  displayTime: 3000,
  message: "You found an easter egg already!",
  showProgress: "bottom",
  position: "bottom right"
 });
});

$("#egg").dimmer({
 transition: "fade up",
 on: "hover"
});

$(".ui.form").form({
 fields: {
  email: {
   identifier: "email",
   rules: [
    {
     type: "email",
     prompt: "Please enter a valid e-mail"
    }
   ]
  }
 },
 onFailure: function(formErrors, fields) {
  $("body").toast({
   class: "error",
   title: "Oops!",
   showIcon: "exclamation triangle",
   displayTime: 0,
   message: "Please enter a valid email!",
   closeIcon: true,
   position: "top right"
  });
  return false;
 }
});
