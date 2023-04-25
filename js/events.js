const month = -1;
var events = [
  { Date: new Date(2023, 4 + month, 3), Title: "2 Happy <br> Standard Rec <br> 4-8 PM" },
  { Date: new Date(2023, 4 + month, 6), Title: "Chakra Ball <br> 4-8" },
];
//================================================
var settings = {};
var element = document.getElementById("calendar");
calendar(element, events, settings);
