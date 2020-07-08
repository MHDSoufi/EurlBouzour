import React from 'react';
import ReactDOM from 'react-dom';
import Menu from '../partage/Menu';
import { Navbar, Nav, NavDropdown, Form, FormControl, Button, Container } from 'react-bootstrap';

console.log(window.location.origin);
function Propos (){
	return (
		<Container fluid>
		  <Menu />
		  <h1>A Propos</h1>
		</Container>
	);
}
export default Propos;


