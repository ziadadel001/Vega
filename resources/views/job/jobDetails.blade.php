@extends('layouts.vega')

@section('Title' . 'Job Details')

@section('Files')

    <link rel="stylesheet" href="{{ asset('Assets/css/jobDetails.css') }}" />
@endsection
@section('content')
    <div class="nav_back mt-5">
        <div class="container">
            <a class="d-flex align-items-center gap-2 text-decoration-none" href="{{ route('Jobs.create') }}">
                <img src="{{ asset('assets/images/jobDetailsPage/arrowLeft-icon.png') }}" alt="arrow-left" />
                <p class="m-0">see all jobs</p>
            </a>
        </div>
    </div>
    <section class="job my-5">
        <div class="container">
            <div class="content d-flex flex-md-row flex-column align-items-center justify-content-between">
                <div class="job_data d-flex flex-md-row flex-column align-items-center gap-4 w-100">
                    <img width="110px" src="{{ asset('assets/images/jobDetailsPage/company.jpg') }}" alt="company-image" />
                    <div class="job_info w-100">
                        <div
                            class="job_title d-sm-flex flex-sm-row gap-sm-4 justify-content-md-start d-flex flex-column justify-content-center gap-2 align-items-center">
                            <h4 class="m-0">{{ $job->job_title }}</h4>
                            <small class="job_hours-badge">{{ $job->job_type }}</small>
                        </div>
                        <p class="text-muted my-2 text-center text-md-start">{{ $job->company }}</p>
                        <div class="d-flex flex-md-row flex-column gap-4">
                            <div class="d-flex align-items-center gap-1">
                                <img src="{{ asset('assets/images/jobDetailsPage/location-mutedIcon.png') }}"
                                    alt="location" />
                                <small class="m-0 text-muted">{{ $job->location }}</small>
                            </div>
                            <div class="d-flex align-items-center gap-1">
                                <img src="{{ asset('assets/images/jobDetailsPage/design-icon.png') }}" alt="designing" />
                                <small class="m-0 text-muted">{{ $job->category }}</small>
                            </div>
                            <div class="d-flex align-items-center gap-1">
                                <img src="{{ asset('assets/images/jobDetailsPage/salary-mutedIcon.png') }}"
                                    alt="designing" />
                                <small class="m-0 text-muted">{{ $job->min_salary }}LE-{{ $job->max_salary }}LE /
                                    month</small>
                            </div>
                            <div class="d-flex align-items-center gap-1">
                                <img src="{{ asset('assets/images/jobDetailsPage/date-mutedIcon.png') }}"
                                    alt="designing" />
                                <small class="m-0 text-muted">Posted 2 days Ago</small>
                            </div>
                        </div>
                    </div>
                </div>
                <a href="{{ route('applyjob.index') }}" class="cta btn-prim w-100 mt-4">Apply</a>
            </div>
        </div>
    </section>
    <section class="job_brief">
        <div class="container">
            <div class="content d-lg-flex gap-5 align-items-start">
                <div class="job_details">
                    <div class="job_desc">
                        <h4>Job Description</h4>
                        <p>
                            {{ $job->Description }}
                        </p>
                    </div>
                    <div class="job_require">
                        <h4>Key Requirements</h4>
                        <ul class="list-unstyled list-dot">
                            <li class="d-flex gap-1">
                                <span>-</span>
                                Develops prospect lists and performs email outreach to
                                prospective customers.
                            </li>
                            <li class="d-flex gap-1">
                                <span>-</span>
                                Follow up with prospects to foster positive relationships &
                                convert them to customers.
                            </li>
                            <li class="d-flex gap-1">
                                <span>-</span>
                                Assists customer service with creating quotes & orders for
                                significant leads
                            </li>
                            <li class="d-flex gap-1">
                                <span>-</span>
                                Creates spec samples for high potential prospects & customers.
                            </li>
                            <li class="d-flex gap-1">
                                <span>-</span>
                                Tracks the progress of customers through our sales funnel &
                                follows up appropriately
                            </li>
                            <li class="d-flex gap-1">
                                <span>-</span>
                                Assists high-value customers via phone & email as needed.
                            </li>
                            <li class="d-flex gap-1">
                                <span>-</span>
                                Identifies opportunities to improve our service based on
                                customer interactions.
                            </li>
                            <li class="d-flex gap-1">
                                <span>-</span>
                                Performs other tasks as assigned by management.
                            </li>
                        </ul>
                    </div>
                    <div class="job_qualifications">
                        <h4>Qualifications</h4>
                        <ul class="list-unstyled">
                            <li class="d-flex gap-1">
                                <span>-</span>
                                Outstanding interpersonal skills.
                            </li>
                            <li class="d-flex gap-1">
                                <span>-</span>
                                Willing to travel for meetings, shows and events.
                            </li>
                            <li class="d-flex gap-1">
                                <span>-</span>
                                Self motivated.
                            </li>
                            <li class="d-flex gap-1">
                                <span>-</span>
                                Must be located in the US.
                            </li>
                            <li class="d-flex gap-1">
                                <span>-</span>
                                Compensation.
                            </li>
                            <li class="d-flex gap-1">
                                <span>-</span>
                                Signing bonus.
                            </li>
                            <li class="d-flex gap-1">
                                <span>-</span>
                                4 weeks vacation.
                            </li>
                        </ul>
                    </div>
                    <div class="skills mb-4">
                        <h4 class="mb-3">Skills</h4>
                        <div class="d-flex gap-3 flex-wrap">
                            <small class="skill"><a href="#"
                                    class="text-decoration-none text-muted">Business</a></small>
                            <small class="skill"><a href="#"
                                    class="text-decoration-none text-muted">Marketing</a></small>
                            <small class="skill"><a href="#"
                                    class="text-decoration-none text-muted">Development</a></small>
                            <small class="skill"><a href="#"
                                    class="text-decoration-none text-muted">Founder</a></small>
                            <small class="skill"><a href="#" class="text-decoration-none text-muted">Html</a></small>
                            <small class="skill"><a href="#"
                                    class="text-decoration-none text-muted">Entrepreneur</a></small>
                            <small class="skill"><a href="#"
                                    class="text-decoration-none text-muted">InterfaceDesign</a></small>
                            <small class="skill"><a href="#"
                                    class="text-decoration-none text-muted">University</a></small>
                            <small class="skill"><a href="#"
                                    class="text-decoration-none text-muted">Technology</a></small>
                        </div>
                    </div>
                </div>
                <div class="job_overview mb-3 w-100">
                    <h4 class="mb-3">Job Overview</h4>
                    <div class="d-flex align-items-start gap-3 mb-3">
                        <img class="mt-1" src="{{ asset('assets/images/jobDetailsPage/date-icon.png') }}"
                            alt="dateIcon" />
                        <div>
                            <p class="m-0">Date posted:</p>
                            <p class="m-0 text-muted">2 days ago</p>
                        </div>
                    </div>
                    <div class="d-flex align-items-start gap-3 mb-3">
                        <img class="mt-1" src="{{ asset('assets/images/jobDetailsPage/expire-icon.png') }}"
                            alt="jobExpiryIcon" />
                        <div>
                            <p class="m-0">Expiration date:</p>
                            <p class="m-0 text-muted">April 12 , 2024</p>
                        </div>
                    </div>
                    <div class="d-flex align-items-start gap-3 mb-3">
                        <img class="mt-1" src="{{ asset('assets/images/jobDetailsPage/profile-icon.png') }}"
                            alt="jobTitleIcon" />
                        <div>
                            <p class="m-0">Job title:</p>
                            <p class="m-0 text-muted">{{ $job->category }}</p>
                        </div>
                    </div>
                    <div class="d-flex align-items-start gap-3 mb-3">
                        <img class="mt-1" src="{{ asset('assets/images/jobDetailsPage/location-icon.png') }}"
                            alt="locationIcon" />
                        <div>
                            <p class="m-0">Location:</p>
                            <p class="m-0 text-muted">{{ $job->location }}</p>
                        </div>
                    </div>
                    <div class="d-flex align-items-start gap-3 mb-3">
                        <img class="mt-1" src="{{ asset('assets/images/jobDetailsPage/salary-icon.png') }}"
                            alt="salaryIcon" />
                        <div>
                            <p class="m-0">Salary:</p>
                            <p class="m-0 text-muted">{{ $job->min_salary }}LE-{{ $job->max_salary }}LE / month</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="related_jobs mb-5">
        <div class="container">
            <h4>Related Jobs</h4>
            <div
                class="content related_job mt-4 py-2 px-3 d-flex flex-md-row flex-column align-items-center justify-content-between">
                <div class="job_data d-flex flex-md-row flex-column align-items-center gap-4 w-100">
                    <img width="80px" src="{{ asset('assets/images/jobDetailsPage/company.jpg') }}"
                        alt="company-image" />
                    <div class="job_info w-100">
                        <div
                            class="job_title d-sm-flex flex-sm-row gap-sm-4 justify-content-md-start d-flex flex-column justify-content-center gap-2 align-items-center">
                            <p class="m-0">Junior Graphic designer</p>
                        </div>
                        <p class="text-muted mb-2 mb-1 text-center text-md-start">
                            Netflix
                        </p>
                        <div class="d-flex flex-md-row flex-column gap-4">
                            <div class="d-flex align-items-center gap-1">
                                <img width="16px"
                                    src="{{ asset('assets/images/jobDetailsPage/location-mutedIcon.png') }}"
                                    alt="location" />
                                <small class="m-0 text-muted">Egypt</small>
                            </div>
                            <div class="d-flex align-items-center gap-1">
                                <img width="16px" src="{{ asset('assets/images/jobDetailsPage/design-icon.png') }}"
                                    alt="designing" />
                                <small class="m-0 text-muted">Design</small>
                            </div>
                            <div class="d-flex align-items-center gap-1">
                                <img width="16px"
                                    src="{{ asset('assets/images/jobDetailsPage/salary-mutedIcon.png') }}"
                                    alt="designing" />
                                <small class="m-0 text-muted">5000LE-6000LE / month</small>
                            </div>
                            <div class="d-flex align-items-center gap-1">
                                <img width="16px" src="{{ asset('assets/images/jobDetailsPage/date-mutedIcon.png') }}"
                                    alt="designing" />
                                <small class="m-0 text-muted">Posted 2 days Ago</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="cta_related-job w-100 d-flex flex-column align-items-end">
                    <small class="job_hours-badge px-3">Full Time</small>
                    <a href="#" class="cta btn-prim w-100 mt-4">Apply</a>
                </div>
            </div>
            <div
                class="content related_job mt-4 py-2 px-3 d-flex flex-md-row flex-column align-items-center justify-content-between">
                <div class="job_data d-flex flex-md-row flex-column align-items-center gap-4 w-100">
                    <img width="80px" src="{{ asset('assets/images/jobDetailsPage/company.jpg') }}"
                        alt="company-image" />
                    <div class="job_info w-100">
                        <div
                            class="job_title d-sm-flex flex-sm-row gap-sm-4 justify-content-md-start d-flex flex-column justify-content-center gap-2 align-items-center">
                            <p class="m-0">Junior Graphic designer</p>
                        </div>
                        <p class="text-muted mb-2 mb-1 text-center text-md-start">
                            Netflix
                        </p>
                        <div class="d-flex flex-md-row flex-column gap-4">
                            <div class="d-flex align-items-center gap-1">
                                <img width="16px"
                                    src="{{ asset('assets/images/jobDetailsPage/location-mutedIcon.png') }}"
                                    alt="location" />
                                <small class="m-0 text-muted">Egypt</small>
                            </div>
                            <div class="d-flex align-items-center gap-1">
                                <img width="16px" src="{{ asset('assets/images/jobDetailsPage/design-icon.png') }}"
                                    alt="designing" />
                                <small class="m-0 text-muted">Design</small>
                            </div>
                            <div class="d-flex align-items-center gap-1">
                                <img width="16px"
                                    src="{{ asset('assets/images/jobDetailsPage/salary-mutedIcon.png') }}"
                                    alt="designing" />
                                <small class="m-0 text-muted">5000LE-6000LE / month</small>
                            </div>
                            <div class="d-flex align-items-center gap-1">
                                <img width="16px" src="{{ asset('assets/images/jobDetailsPage/date-mutedIcon.png') }}"
                                    alt="designing" />
                                <small class="m-0 text-muted">Posted 2 days Ago</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="cta_related-job w-100 d-flex flex-column align-items-end">
                    <small class="job_hours-badge px-3">Full Time</small>
                    <a href="#" class="cta btn-prim w-100 mt-4">Apply</a>
                </div>
            </div>
            <div
                class="content related_job mt-4 py-2 px-3 d-flex flex-md-row flex-column align-items-center justify-content-between">
                <div class="job_data d-flex flex-md-row flex-column align-items-center gap-4 w-100">
                    <img width="80px" src="{{ asset('assets/images/jobDetailsPage/company.jpg') }}"
                        alt="company-image" />
                    <div class="job_info w-100">
                        <div
                            class="job_title d-sm-flex flex-sm-row gap-sm-4 justify-content-md-start d-flex flex-column justify-content-center gap-2 align-items-center">
                            <p class="m-0">Junior Graphic designer</p>
                        </div>
                        <p class="text-muted mb-2 mb-1 text-center text-md-start">
                            Netflix
                        </p>
                        <div class="d-flex flex-md-row flex-column gap-4">
                            <div class="d-flex align-items-center gap-1">
                                <img width="16px"
                                    src="{{ asset('assets/images/jobDetailsPage/location-mutedIcon.png') }}"
                                    alt="location" />
                                <small class="m-0 text-muted">Egypt</small>
                            </div>
                            <div class="d-flex align-items-center gap-1">
                                <img width="16px" src="{{ asset('assets/images/jobDetailsPage/design-icon.png') }}"
                                    alt="designing" />
                                <small class="m-0 text-muted">Design</small>
                            </div>
                            <div class="d-flex align-items-center gap-1">
                                <img width="16px"
                                    src="{{ asset('assets/images/jobDetailsPage/salary-mutedIcon.png') }}"
                                    alt="designing" />
                                <small class="m-0 text-muted">5000LE-6000LE / month</small>
                            </div>
                            <div class="d-flex align-items-center gap-1">
                                <img width="16px" src="{{ asset('assets/images/jobDetailsPage/date-mutedIcon.png') }}"
                                    alt="designing" />
                                <small class="m-0 text-muted">Posted 2 days Ago</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="cta_related-job w-100 d-flex flex-column align-items-end">
                    <small class="job_hours-badge px-3">Full Time</small>
                    <a href="#" class="cta btn-prim w-100 mt-4">Apply</a>
                </div>
            </div>
        </div>

    </section>
@endsection
