import React from 'react';
import ReactDOM from 'react-dom';
import { Navbar, Nav, NavDropdown, Form, FormControl, Button, Container } from 'react-bootstrap';

console.log(window.location.origin);
function Menu (){
	
	return (
		<>
		<style type="text/css">
		   {`

    		.navbar{
    			font-family: 'Fira Sans', sans-serif;
    			font-weight: bold;
    			
    		}
    		.sticky-top {
    			background-color:#fff;
    		}
    	   `}
  		</style>
		<Navbar  expand="xl"  sticky = "top">
  			<Navbar.Brand href="#home"><img
    									width={64}
    									height={64}
    									className="mr-3"
    									src="http://127.0.0.1:8000/images/Promotion les rosier/1593547733_EWIh2.png"
    									 />
    		</Navbar.Brand>
  			<Navbar.Toggle aria-controls="basic-navbar-nav" />
  			<Navbar.Collapse id="basic-navbar-nav">
		    <Nav className="mr-auto">
			      <Nav.Link href="#home">Acceuil</Nav.Link>
			      <Nav.Link href="">La</Nav.Link>
			      <Nav.Link href="#link">Link</Nav.Link>
			      <Nav.Link href="#link">Link</Nav.Link>
			      <Nav.Link href="#link">Link</Nav.Link>
			      <Nav.Link href="#link">Link</Nav.Link>
			      <NavDropdown title="Dropdown" id="basic-nav-dropdown">
			        <NavDropdown.Item href="#action/3.1">Action</NavDropdown.Item>
			        <NavDropdown.Item href="#action/3.2">Another action</NavDropdown.Item>
			        <NavDropdown.Item href="#action/3.3">Something</NavDropdown.Item>
			        <NavDropdown.Divider />
			        <NavDropdown.Item href="#action/3.4">Separated link</NavDropdown.Item>
			      </NavDropdown>
    		</Nav>
		    <Form inline>
		      <FormControl type="text" placeholder="Search" className="mr-sm-2" />
		      <Button variant="outline-success">Search</Button>
		    </Form>
  			</Navbar.Collapse>
		</Navbar>
		</>
	);
}
export default Menu;


