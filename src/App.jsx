import logo from './logo.svg';
import './App.css';
import React from "react";
import {
  BrowserRouter as Router,
  Routes,
  Route,
  Navigate,
} from "react-router-dom";
import FuelQuoteHistory from './FuelQuoteHistory';
import ProfileManagement from './ProfileManagement';

function App() {
  return (
    <div className="App">
      {/* This is where we add the routes to our pages.
          First import the path of the file (as done above for FuelQuoteHistory.jsx
          Then add a Route with the same format as below (within the <Routes> tags)
          The default page should have a path of '/' which makes it render when the site first opens */}
      <Router>
        <Routes>
          <Route path='/fuelquotehistory' element={<FuelQuoteHistory/>}></Route>
          <Route path='/profilemanagement' element={<ProfileManagement/>}></Route>
          {/* Add your routes here */}
        </Routes>
      </Router>
    </div>
  );
}

export default App;
