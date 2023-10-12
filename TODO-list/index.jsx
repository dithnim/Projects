ReactDOM.render(
  <h1 style={{ fontWeight: 500, textDecoration: "underline" }}>To Do List</h1>,
  document.getElementById("title")
);

ReactDOM.render(
  <div style={{ display: "flex", backgroundColor: "var(--back_dark_color)" }}>
    <div style={{ display: "flex", marginRight: "350px" }}>
      <ion-icon name="logo-react"></ion-icon>
      <label>TODO</label>
    </div>
    <div>
      <ion-icon
        name="ellipsis-horizontal-sharp"
        style={{ cursor: "pointer" }}
        id="list-menu"></ion-icon>
    </div>
  </div>,
  document.getElementById("list-head")
);

ReactDOM.render(
  <div style={{ display: "flex", backgroundColor: "var(--back_dark_color)" }}>
    <div style={{ display: "flex", marginRight: "349px" }}>
      <ion-icon name="home-outline" style={{ marginRight: "3px" }}></ion-icon>
      <label>Tasks</label>
    </div>
    <div>
      <ion-icon
        name="add-circle-sharp"
        style={{ color: "#dcfc35", fontSize: "1.6em", cursor: "pointer" }}
        id="add-button"></ion-icon>
    </div>
  </div>,
  document.getElementById("list-head2")
);

function takeinput() {
  let user_input = document.getElementById("input-data").value;
  return user_input;
}

function taskrender(task) {
  $("#task-content").append(
    '<div class="div-jquery p-2 mb-2">' +
      task +
      '<ion-icon name="checkmark-circle-outline"></ion-icon></div>'
  );
}

$(document).ready(function () {
  $("#list-menu").click(function () {
    $("#popup-menu").html("<p>adfadfa</p>");
  });

  $("#add-button").click(function () {
    ReactDOM.render(
      <div
        style={{
          display: "flex",
          backgroundColor: "var(--back_color)",
          width: "100%",
          borderBottom: "1px solid #dcfc35",
        }}
        className="py-1 px-2">
        <input
          type="text"
          placeholder="Add a task"
          className="px-2 py-1 me-3"
          id="input-data"
        />
        <div
          style={{
            display: "flex",
            justifyContent: "center",
            alignItems: "center",
            width: "110px",
            backgroundColor: "var(--back_dark_color)",
            borderRadius: "5px",
            cursor: "pointer",
          }}
          id="task-adder">
          <label
            style={{
              color: "#dcfc35",
              background: "transparent",
              fontSize: "1em",
              cursor: "pointer",
            }}>
            Add
          </label>
        </div>
      </div>,
      document.getElementById("task-input")
    );

    $("#task-adder").click(function () {
      let data = takeinput();
      taskrender(data);
    });
  });
});
