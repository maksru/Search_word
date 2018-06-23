 $.validator.addClassRules({
  name: {
    required: true,
    minlength: 2
  },
  text: {
    required: true,
    digits: true,
    minlength: 5,
    maxlength: 5
  }
});