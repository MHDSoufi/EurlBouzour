import React from 'react';
import ReactDOM from 'react-dom';
import {  Carousel } from 'react-bootstrap';

function PromoName(props){
	return(
		<>
		<style type="text/css">
                {`
                    .btn-warning {
                        color: #fff;
                        font-family: 'Fira Sans', sans-serif;
                        font-weight: bold;
                        background-color: #f7941e;
                    }
                `}
        </style>
		<a className="btn btn-warning" href="/edit" role="button">{props.name}</a>
		</>
	);
}

function Slider (){
	return (
		<>
		<style type="text/css">
                {`
                    .w-100 {
                        height: 100vh!important;
                    }
                `}
            </style>
		<Carousel indicators={false} >
  			<Carousel.Item>
			    <img
			      className="d-block w-100"
			      src="/storage/slider/promo1.jpg"
			      alt="First slide"
			    />
			    <Carousel.Caption>
			      <PromoName name = {"Residence HEY BENSOUNA"} id={1}/>
			    </Carousel.Caption>
  			</Carousel.Item>
  			<Carousel.Item>
			    <img
			      className="d-block w-100"
			      src="/storage/slider/promo2.png"
			      alt="First slide"
			    />
			    <Carousel.Caption>
			      <PromoName name = {"PROJET 160 LOGTS LPA BOUDJLIDA TLEMCEN"} id={1}/>
			    </Carousel.Caption>
  			</Carousel.Item>
  			<Carousel.Item>
			    <img
			      className="d-block w-100"
			      src="/storage/slider/promo3.jpg"
			      alt="First slide"
			    />
			    <Carousel.Caption>
			      <PromoName name = {"Promotion Immobiliere Oran - Canastel"} id={1}/>
			    </Carousel.Caption>
  			</Carousel.Item>
  			<Carousel.Item>
			    <img
			      className="d-block w-100"
			      src="/storage/slider/promo4.jpg"
			      alt="First slide"
			    />
			    <Carousel.Caption>
			      <PromoName name = {"RESIDENCE  ELYASMINE BELGAID ORAN"} id={1}/>
			    </Carousel.Caption>
  			</Carousel.Item>
  			<Carousel.Item>
			    <img
			      className="d-block w-100"
			      src="/storage/slider/promo5.jpg"
			      alt="First slide"
			    />
			    <Carousel.Caption>
			      <PromoName name = {"RESIDENCE  ZOHOUR PEPINIERE ORAN"} id={1}/>
			    </Carousel.Caption>
  			</Carousel.Item>
  			<Carousel.Item>
			    <img
			      className="d-block w-100"
			      src="/storage/slider/promo6.jpg"
			      alt="First slide"
			    />
			    <Carousel.Caption>
			      <PromoName name = {"RESIDENCE ELSALEM BIR EL DJIR ORAN"} id={1}/>
			    </Carousel.Caption>
  			</Carousel.Item>
  			<Carousel.Item>
			    <img
			      className="d-block w-100"
			      src="/storage/slider/promo7.jpg"
			      alt="First slide"
			    />
			    <Carousel.Caption>
			      <PromoName name = {"RESIDENCE ENASSIM BELGAID ORAN"} id={1}/>
			    </Carousel.Caption>
  			</Carousel.Item>
		</Carousel>
		</>
	);
}
export default Slider;