const express = require("express");
const helmet = require("helmet");
const app = express();

app.use(helmet());

app.use(express.static("public"));
app.use("/memory", express.static(__dirname + "/games/Memory"));
app.use("/rabbittracker", express.static(__dirname + "/games/RabbitTracker"));
app.use("/spaceinvaders", express.static(__dirname + "/games/SpaceInvaders"));
app.use("/sudoku", express.static(__dirname + "/games/Sudoku"));

app.get("/memory", (req, res) => {
    res.sendFile(__dirname + "/views/memory.html");
});

app.get("/rabbittracker", (req, res) => {
    res.sendFile(__dirname + "/views/rabbit.html");
});

app.get("/spaceinvaders", (req, res) => {
    res.sendFile(__dirname + "/views/invaders.html");
});

app.get("/sudoku", (req, res) => {
    res.sendFile(__dirname + "/views/sudoku.html");
});

app.get("/", (req, res) => {
    res.sendFile(__dirname + "/views/index.html");
});

app.get("/*", (req, res) => {
    res.redirect("/");
});

app.listen(process.env.PORT || 8080, () => console.log("Server running"));
