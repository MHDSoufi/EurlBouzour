import React from 'react';
import ReactDOM from 'react-dom';
import Menu from '../partage/Menu';
import Slider from'./Slider';
import SliderCardCour from'./SliderCardCour';
import Presentation from './Presentation';
import { Navbar, Nav, NavDropdown, Form, FormControl, Button, Container } from 'react-bootstrap';

class Acceuil extends React.Component {
    render(){
        return (
            <>
            <style type="text/css">
                {`
                    
                    .container-md, .container-sm, .container-fluid {
                        padding-right: 0px;
                        padding-left: 0px;
                    }
                `}
            </style>
            <Container fluid>
                <Menu isFixed = {true}/> 
                <Slider />
                <SliderCardCour isEnCour={true} title="Projet en Cours"/>
                <Presentation />
                <SliderCardCour isEnCour={false} title="Projet Livrés"/>
            </Container>
            </>
        );
    }
}

export default Acceuil;


