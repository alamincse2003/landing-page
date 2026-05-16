@extends('layouts.app')

@section('title', 'Niduslab — AI & Automation Studio')

@section('content')
  @include('components.hero', ['products' => $products])
  @include('components.ai-section')
  @include('components.ecosystem', ['ecosystem' => $ecosystem])
  @include('components.services', ['services' => $services])
  @include('components.process', ['process' => $process])
  @include('components.why-us')
  @include('components.case-studies', ['caseStudies' => $caseStudies])
  @include('components.industries', ['industries' => $industries])
  @include('components.testimonials', ['testimonials' => $testimonials])
  @include('components.faq', ['faqs' => $faqs])
  @include('components.cta')
@endsection
