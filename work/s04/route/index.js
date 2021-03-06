/**
 * General routes.
 */
"use strict";

const express = require("express");
const router = express.Router();

// Add a route for the path /
router.get("/", (req, res) => {
    res.send("Hello World");
});

// Add a route for the path /about
router.get("/about", (req, res) => {
    res.send("About something");
});

//route for path /lotto
router.get("/lotto", (req, res) => {

    let myLotto = []; 
    for (let i = 0; i < 7; i++) {
        
        myLotto[i] = Math.floor(Math.random() * (35) + 1);
    }
    res.send("My Lottery : " + myLotto);
    
});

module.exports = router;
