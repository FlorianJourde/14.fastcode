$(document).ready(function () {
  $("#commentSubmit").click(function (e) {
    e.preventDefault();
    let id = $("#singleId").val();
    let pseudo = $("#pseudo").val();
    let title = $("#title").val();
    let content = $("#comment").val();
    // console.log("Coucou !");
    // console.log(id);
    $.post(
      "comments.php",
      {
        id: id,
        pseudo: pseudo,
        title: title,
        content: content,
      },
      function (data) {
        let badgeValue = parseInt($("#badge").html());
        newBadgeValue = badgeValue += 1;
        $("#badge").html(newBadgeValue);
        $("#coms").html(data);
      }
    );
    $("#pseudo").val("");
    $("#title").val("");
    $("#comment").val("");
  });
});
