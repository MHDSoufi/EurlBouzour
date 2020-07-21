import React, {useState, useRef, useEffect} from 'react';
import ReactDOM from 'react-dom';
import { Navbar, Nav, NavDropdown, Form, FormControl, Button, Container } from 'react-bootstrap';

function Menu (props){
const [navBackground, setNavBackground] = useState(false)
  const navRef = useRef()
  navRef.current = navBackground
  useEffect(() => {
    const handleScroll = () => {
      const show = window.scrollY > 10
      if (navRef.current !== show) {
        setNavBackground(show)
      }
    }
    document.addEventListener('scroll', handleScroll)
    return () => {
      document.removeEventListener('scroll', handleScroll)
    }
  }, [])
if (!props.isFixed) {

}

	return (
		<>
		<style type="text/css">
		   {`

    		.navbar{
    			font-family: 'Fira Sans', sans-serif;
    			font-weight: bold;
                transition: all 0.4s ease;
    			
    		}
    		.navbar-light .navbar-nav .nav-link{
    			color: black;
    		}
    		.navbar-light .navbar-nav .nav-link:hover{
    			background-color: #f7941e;
    			color:#fff;
    		}
    		.activeMenu{
    			background-color: #f7941e;
    			color:#fff;
    		}
    		.sticky-top {
    			background-color:#fff;
    		}
    		.ml-auto{
    			margin-right:20px;
    		}
    		.mr-3{
    			margin-left: 60px;
    		}
    		
    	   `}
  		</style>
		<Navbar  expand="sm" fixed = "top" style = {{backgroundColor : navBackground||!props.isFixed  ? "white" : "transparent" }}   >
  			<Navbar.Brand href="#home"><img
    									width={120}
    									height={54}
    									className="mr-3"
    									src="/storage/logo.png"
    									 />
    		</Navbar.Brand>
  			<Navbar.Toggle aria-controls="basic-navbar-nav" />
  			<Navbar.Collapse id="basic-navbar-nav">
		    <Nav className="ml-auto" >
			      <Nav.Link href="/" >Acceuil</Nav.Link>
			      <Nav.Link href="/propos">A-Propos</Nav.Link>
			      <NavDropdown title="Nos Projets" id="basic-nav-dropdown">
			        <NavDropdown.Item href="promo_en_cour" >Projets en cours</NavDropdown.Item>
			        <NavDropdown.Item href="#action/3.2">Projets livrés</NavDropdown.Item>
			      </NavDropdown>
			      <Nav.Link href="">Recrutement</Nav.Link>
			      <Nav.Link href="/faq">FAQ</Nav.Link>
			      <Nav.Link href="/contact">Contact</Nav.Link>
    		</Nav>
		    <Form inline>
		      <FormControl type="text" placeholder="Rechercher" className="mr-sm-2" />
		      <Button variant="outline-success">Rechercher</Button>
		    </Form>
  			</Navbar.Collapse>
		</Navbar>
		</>
	);
}
export default Menu;


