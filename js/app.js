const inputBox = document.querySelector(".inputField input");
const addBtn = document.querySelector(".inputField button");
const todoList = document.querySelector(".todoList");
const deleteAllBtn = document.querySelector(".footer button");
var numeroTarea;
inputBox.onkeyup = () => {
  let userEnteredValue = inputBox.value;
  if (userEnteredValue.trim() != 0) {
    addBtn.classList.add("active");
  } else {
    addBtn.classList.remove("active");
  }
}

showTasks();

addBtn.onclick = () => {
  let userEnteredValue = inputBox.value;
  let getLocalStorageData = localStorage.getItem("New Todo");
  if (getLocalStorageData == null) {
    listArray = [];
  } else {
    listArray = JSON.parse(getLocalStorageData);
  }
  listArray.push(userEnteredValue);
  localStorage.setItem("New Todo", JSON.stringify(listArray));
  showTasks();
  addBtn.classList.remove("active");
}

function showTasks() {
  let getLocalStorageData = localStorage.getItem("New Todo");
  if (getLocalStorageData == null) {
    listArray = [];
  } else {
    listArray = JSON.parse(getLocalStorageData);
  }
  const pendingTasksNumb = document.querySelector(".pendingTasks");
  pendingTasksNumb.textContent = listArray.length;
  if (listArray.length > 0) {
    deleteAllBtn.classList.add("active");
  } else {
    deleteAllBtn.classList.remove("active");
  }
  let newLiTag = "";
  listArray.forEach((element, index) => {
    newLiTag += `<li>${element}<span class="icon" ><i class="bi bi-trash-fill" onclick="deleteTask(${index})">
    </i><span class="icon2"><i class="bi bi-pencil-fill" onclick="showEditTask(${index})"></i>
    </span></span></li>`;
  });
  todoList.innerHTML = newLiTag;
  inputBox.value = "";
}
function showEditTask(index) {
  document.getElementsByClassName("fondo_transparente")[0].style.display = "block";
  numeroTarea = index;

}
function editTask() {
  var d = document.getElementById("nuevaTarea").value;
  console.log(d);
  let getLocalStorageData = localStorage.getItem("New Todo");
  listArray = JSON.parse(getLocalStorageData);
  lenArray = listArray.length;
  console.log(listArray);
  listArray[numeroTarea] = d;
  localStorage.setItem("New Todo", JSON.stringify(listArray));

  console.log(listArray);
  showTasks();
}
function deleteTask(index) {
  let getLocalStorageData = localStorage.getItem("New Todo");
  listArray = JSON.parse(getLocalStorageData);
  listArray.splice(index, 1);
  localStorage.setItem("New Todo", JSON.stringify(listArray));
  showTasks();
}

deleteAllBtn.onclick = () => {
  let getLocalStorageData = localStorage.getItem("New Todo");
  if (getLocalStorageData == null) {
    listArray = [];
  } else {
    listArray = JSON.parse(getLocalStorageData);
    listArray = [];
  }
  localStorage.setItem("New Todo", JSON.stringify(listArray));
  showTasks();
}
function cerrarSesion() {
  window.location.href = "index.html";

}
