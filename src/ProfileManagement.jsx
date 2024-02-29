import * as React from "react";
import { useState } from "react";
import Button from "@mui/material/Button";
import Box from "@mui/material/Box";
import Typography from "@mui/material/Typography";
import { DataGrid, gridClasses } from "@mui/x-data-grid";
import TableContainer from '@mui/material/TableContainer';

import "./ProfileManagement.css"

export default function ProfileManagement() {
    return (
<body className = "background">
    <header className = "header">
        <h1>Profile Management</h1>
    </header>

    <main>
        <form className = "formBox">
            <div className="form">
                <label for="name">Full Name:</label>
                <input type="text" name="name" id="name" pattern="^([a-zA-Z]{1,50})$" required/>
            </div>
            <div className="form">
                <label for="address1">Address 1:</label>
                <input type="text" name="address1" id="address1" maxlength="100" required/>
            </div>
            <div className="form">
                <label for="address2">Address 2:</label>
                <input type="text" name="address2" id="address2" maxlength="100"/>
            </div>
            <div className="form">
                <label for="city">City:</label>
                <input type="text" name="city" id="city" maxlength="100" required/>

                <label for="state">State:</label>
                <select name="state" id="state" required>
                    <option selected="selected"></option>
                    <option value="AL">AL</option>
                    <option value="TX">TX</option>
                    <option value="WY">WY</option>
                </select>
            </div>
            <div className="form">
                <label for="zipcode">Zipcode:</label>
                <input type="text" name="zipcode" id="zipcode" pattern="[0-9]{5,9}" required/>
            </div>
            <div className="form">
                <button type="submit">
                    Submit
                </button>
            </div>
        </form>
    </main>

    <footer>
        <p>&copy; FuelsRUs. All rights reserved.</p>
    </footer>
</body>
    )
}