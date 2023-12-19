$(document).ready(function () {
  // Add more fields
  $(".add-region-btn").click(function () {
    var html1 =
      '<div class="row mb-3">' +
      '<div class="col">' +
      '<input type="text" class="form-control" name="field1[]" placeholder="ادخل البلد">' +
      "</div>" +
      '<div class="col">' +
      '<input type="text" class="form-control" name="field2[]" placeholder="ادخل المدينة">' +
      "</div>" +
      '<div class="col">' +
      '<button type="button" class="btn remove-btn"><i class="fa-solid fa-trash-can"></i></button>' +
      "</div>" +
      "</div>";
    $("#repeater1").append(html1);
  });

  // Remove fields
  $("#repeater1").on("click", ".remove-btn", function () {
    $(this).closest(".row").remove();
  });

  // Add more fields
  $(".add-experience-btn").click(function () {
    var html2 =
      '<div class="row mb-3">' +
      '<div class="col">' +
      '<input type="text" class="form-control" name="field1-2[]" placeholder="ادخل المسمى الوظيفي ">' +
      "</div>" +
      '<div class="col">' +
      '<input type="text" class="form-control" name="field2-2[]" placeholder="ادخل المسؤولية">' +
      "</div>" +
      '<div class="col">' +
      '<button type="button" class="btn remove-btn"><i class="fa-solid fa-trash-can"></i></button>' +
      "</div>" +
      "</div>";
    $("#repeater2").append(html2);
  });

  // Remove fields
  $("#repeater2").on("click", ".remove-btn", function () {
    $(this).closest(".row").remove();
  });

  // Add more fields
  $(".add-reference-btn").click(function () {
    var html3 =
      '<div class="row mb-3">' +
      '<div class="col">' +
      '<input type="text" class="form-control" name="field1-3[]" placeholder="ادخل اسم المرجع ">' +
      "</div>" +
      '<div class="col">' +
      '<input type="phone" class="form-control" name="field2-3[]" placeholder="ادخل هاتف المرجع">' +
      "</div>" +
      '<div class="col">' +
      '<input type="text" class="form-control" name="field3-3[]" placeholder="ادخل الفاكس">' +
      "</div>" +
      '<div class="col">' +
      '<input type="email" class="form-control" name="field4-3[]" placeholder="ادخل البريد الالكتروني ">' +
      "</div>" +
      '<div class="col">' +
      '<button type="button" class="btn remove-btn"><i class="fa-solid fa-trash-can"></i></button>' +
      "</div>" +
      "</div>";
    $("#repeater3").append(html3);
  });

  // Remove fields
  $("#repeater3").on("click", ".remove-btn", function () {
    $(this).closest(".row").remove();
  });

  const item = 1 ;
  // Add more fields
  $(".add-bank-btn").click(function () {
    var html4 =
      '<div class="row mb-3">' +
      '<div class="col-md-6" style="margin-top: 10px;">' +
      '<input type="text" required class="form-control" name="banks['+ item +'][name]" placeholder="ادخل الاسم">' +
      "</div>" +
      '<div class="col-md-6" style="margin-top: 10px;">' +
      '<input type="text" required class="form-control" name="banks['+ item +'][address]" placeholder="ادخل العنوان">' +
      "</div>" +
      '<div class="col-md-6" style="margin-top: 10px;" >' +
      '<input type="text" required class="form-control" name="banks['+ item +'][max_balance]" placeholder=" أدخل أعلى رصيد ممدد ">' +
      "</div>" +
      '<div class="col-md-6" style="margin-top: 10px;" >' +
      '<input type="text" required class="form-control" name="banks['+ item +'][purpose]" placeholder="ادخل الغرض ">' +
      "</div>" +
      '<div class="col">' +
      '<button type="button" class="btn remove-btn"><i class="fa-solid fa-trash-can"></i></button>' +
      "</div>" +
      "</div>";
    $("#repeater4").append(html4);
  });

  // Remove fields
  $("#repeater4").on("click", ".remove-btn", function () {
    $(this).closest(".row").remove();
  });

  var next_1 = document.getElementById("next-1");
  var next_2 = document.getElementById("next-2");
  var next_3 = document.getElementById("next-3");
  // var next_4 = document.getElementById("next-4");
  var prev_1 = document.getElementById("prev-1");
  var prev_2 = document.getElementById("prev-2");
  var prev_3 = document.getElementById("prev-3");
  // var prev_4 = document.getElementById("prev-4");
  var tab_pane_1 = document.getElementById("personal-info-tab-pane");
  var tab_pane_2 = document.getElementById("works-tab-pane");
  var tab_pane_3 = document.getElementById("financial-tab-pane");
  var tab_pane_4 = document.getElementById("delegation-tab-pane");
  // var tab_pane_5 = document.getElementById("delegation-tab-pane");
  var nav_link_1 = document.getElementById("personal-info-tab");
  var nav_link_2 = document.getElementById("works-tab");
  var nav_link_3 = document.getElementById("financial-tab");
  var nav_link_4 = document.getElementById("delegation-tab");
  // var nav_link_5 = document.getElementById("delegation-tab");
  var tabPane = document.getElementsByClassName("tab-pane");
  var navLink = document.getElementsByClassName("nav-link");

  function clear() {
    for (var i = 0; i < tabPane.length; i++) {
      tabPane[i].value = "";
      tabPane[i].classList.remove("show");
      tabPane[i].classList.remove("active");
    }
    for (var i = 0; i < navLink.length; i++) {
      navLink[i].value = "";
      navLink[i].classList.remove("active");
    }
  }
  next_1.onclick = function () {
    clear();
    tab_pane_2.classList.add("show");
    tab_pane_2.classList.add("active");
    nav_link_2.classList.add("active");
  };

  next_2.onclick = function () {
    clear();
    tab_pane_3.classList.add("show");
    tab_pane_3.classList.add("active");
    nav_link_3.classList.add("active");
  };

  next_3.onclick = function () {
    clear();
    tab_pane_4.classList.add("show");
    tab_pane_4.classList.add("active");
    nav_link_4.classList.add("active");
  };

  // next_4.onclick = function () {
  //   clear();
  //   tab_pane_5.classList.add("show");
  //   tab_pane_5.classList.add("active");
  //   nav_link_5.classList.add("active");
  // };

  prev_1.onclick = function () {
    clear();
    tab_pane_1.classList.add("show");
    tab_pane_1.classList.add("active");
    nav_link_1.classList.add("active");
  };

  prev_2.onclick = function () {
    clear();
    tab_pane_2.classList.add("show");
    tab_pane_2.classList.add("active");
    nav_link_2.classList.add("active");
  };

  prev_3.onclick = function () {
    clear();
    tab_pane_3.classList.add("show");
    tab_pane_3.classList.add("active");
    nav_link_3.classList.add("active");
  };

  // prev_4.onclick = function () {
  //   clear();
  //   tab_pane_4.classList.add("show");
  //   tab_pane_4.classList.add("active");
  //   nav_link_4.classList.add("active");
  // };
});
