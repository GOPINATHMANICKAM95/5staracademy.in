@extends('layouts.site')

@section('title', '5StarAcadem | Tally + Excel weekend training')

@section('content')
<section class="hero-section">
    <div class="container hero-grid">
        <div class="hero-copy">
            <div class="eyebrow"><span class="eyebrow-dot"></span> WEEKEND COHORTS · APPLICATIONS OPEN</div>
            <h1>Make your skills<br><em>work-ready.</em></h1>
            <p class="hero-lede">Learn Tally and Excel through real business tasks, guided by industry experts, in a small class where you get the attention you deserve.</p>
            <div class="hero-actions">
                <a class="button button-lime" href="{{ route('google.redirect') }}">Apply for a seat <span aria-hidden="true">↗</span></a>
                <a class="button button-quiet" href="#programs">Explore the programs <span aria-hidden="true">↓</span></a>
            </div>
            <div class="hero-proof"><span class="avatar-stack"><i>5</i><i>★</i><i>A</i></span><span>Small groups, focused guidance<br><strong>10–12 learners per class</strong></span></div>
        </div>
        <div class="hero-art" aria-label="A preview of the 5StarAcadem practical training format">
            <div class="art-orbit orbit-one"></div><div class="art-orbit orbit-two"></div>
            <div class="art-label"><span class="live-dot"></span> LEARN BY DOING</div>
            <div class="learning-card">
                <div class="learning-card-top"><span class="card-kicker">YOUR WEEKEND, WELL SPENT</span><span class="card-index">01 / 03</span></div>
                <div class="mini-sheet" aria-hidden="true">
                    <div class="sheet-row sheet-head"><span>ENTRY</span><span>ACCOUNT</span><span>AMOUNT</span></div>
                    <div class="sheet-row"><span>01</span><span>Sales</span><b>₹ 18,500</b></div>
                    <div class="sheet-row"><span>02</span><span>GST</span><b>₹ 3,330</b></div>
                    <div class="sheet-row"><span>03</span><span>Inventory</span><b>₹ 7,250</b></div>
                </div>
                <div class="learning-bottom"><div><span class="card-kicker">PRACTICAL SESSION</span><strong>Books to business insights</strong></div><span class="arrow-circle" aria-hidden="true">↗</span></div>
            </div>
            <div class="floating-note note-top"><span class="note-icon">✳</span><span><strong>Real-time data</strong><small>Industry-led practice</small></span></div>
            <div class="floating-note note-bottom"><span class="note-number">2h</span><span><strong>One focused session</strong><small>Weekend mornings</small></span></div>
            <span class="art-spark spark-one">✳</span><span class="art-spark spark-two">✳</span>
        </div>
    </div>
    <div class="container hero-bottom"><span>SKILLS FOR THE WORKPLACE</span><span class="hero-bottom-line"></span><span>TALLY PRIME <b>·</b> MICROSOFT EXCEL 365</span></div>
</section>

<section class="format-strip" id="format">
    <div class="container format-grid">
        <div class="format-intro"><span class="section-kicker">LEARN WITH FOCUS</span><h2>Good training<br>needs room to ask.</h2></div>
        <div class="format-stat"><span class="stat-icon">01</span><strong>10–12</strong><span>seats per class<br>for personal guidance</span></div>
        <div class="format-stat"><span class="stat-icon">02</span><strong>2 hours</strong><span>per session<br>focused and hands-on</span></div>
        <div class="format-stat"><span class="stat-icon">03</span><strong>Weekends</strong><span>morning sessions<br>built around your week</span></div>
    </div>
</section>

<section class="programs-section section-pad" id="programs">
    <div class="container">
        <div class="section-heading">
            <div><span class="section-kicker">ONE PRACTICAL LEARNING PATH</span><h2>Build confidence with<br>the tools businesses use.</h2></div>
            <p>Start with the essentials, then practise the everyday tasks and reporting skills employers expect.</p>
        </div>
        <div class="program-grid">
            <article class="program-card tally-card">
                <div class="program-top"><span class="program-icon tally-icon">T</span><span class="program-tag">ACCOUNTING & OPERATIONS</span></div>
                <h3>Tally training</h3>
                <p>Go from accounting basics to confident day-to-day business operations in Tally.</p>
                <div class="topic-groups">
                    <div><span>01</span><p><strong>Accounting essentials</strong>Basic accounting, ledgers, vouchers and everyday entries</p></div>
                    <div><span>02</span><p><strong>GST & compliance</strong>GST, e-way bills and e-invoicing workflows</p></div>
                    <div><span>03</span><p><strong>Business control</strong>Inventory management, MIS reports and other core Tally topics</p></div>
                </div>
                <a class="card-link" href="{{ route('google.redirect') }}">Apply to learn Tally <span aria-hidden="true">↗</span></a>
            </article>
            <article class="program-card excel-card">
                <div class="program-top"><span class="program-icon excel-icon">X</span><span class="program-tag">MICROSOFT EXCEL 365</span></div>
                <h3>Excel training</h3>
                <p>Build from spreadsheet basics to modern analysis, useful automation and clear reports.</p>
                <div class="topic-groups">
                    <div><span>01</span><p><strong>Everyday foundations</strong>Workbook skills, formatting, tables, sorting and data cleanup</p></div>
                    <div><span>02</span><p><strong>Formulas that solve work</strong>SUMIFS, IF, text and date functions, lookups and error handling</p></div>
                    <div><span>03</span><p><strong>Analysis & modern 365</strong>PivotTables, charts, XLOOKUP, FILTER, UNIQUE and dynamic arrays</p></div>
                </div>
                <a class="card-link" href="{{ route('google.redirect') }}">Apply to learn Excel <span aria-hidden="true">↗</span></a>
            </article>
        </div>
        <details class="curriculum-details">
            <summary><span><small>FULL EXCEL OUTLINE</small><strong>View the complete Excel pathway</strong></span><i aria-hidden="true">+</i></summary>
            <div class="curriculum-detail-grid">
                <article><span>01</span><h4>Aggregation & totals</h4><p>SUM, SUMIF, SUMIFS, COUNT, COUNTA, COUNTIF, COUNTIFS, COUNTBLANK, MIN, MAX, SUMPRODUCT, AGGREGATE, SUBTOTAL</p></article>
                <article><span>02</span><h4>Conditional logic</h4><p>IF, IFS, AND, nested IF, MINIFS, MAXIFS</p></article>
                <article><span>03</span><h4>Text & cleanup</h4><p>LEFT, RIGHT, MID, PROPER, CONCATENATE, LEN, FIND, REPLACE, SUBSTITUTE, OFFSET</p></article>
                <article><span>04</span><h4>Dates & time</h4><p>DAY, MONTH, YEAR, WEEKDAY, EDATE, EOMONTH, DATEDIF, NETWORKDAYS, NETWORKDAYS.INTL, WORKDAY, WORKDAY.INTL</p></article>
                <article><span>05</span><h4>Lookups & references</h4><p>VLOOKUP, HLOOKUP, INDEX, MATCH, database functions such as DSUM and DGET</p></article>
                <article><span>06</span><h4>Logic & error handling</h4><p>ISBLANK, ISERR, ISERROR, ISEVEN, ISODD, ISNUMBER, ISNA, ISNONTEXT, ISFORMULA, ISLOGICAL, ISREF, ISTEXT; common errors #DIV/0!, #NAME?, #NUM!, #CALC! and #SPILL!</p></article>
                <article><span>07</span><h4>Productivity tools</h4><p>Conditional and custom formatting, sorting, named ranges, AutoFill and Flash Fill</p></article>
                <article><span>08</span><h4>Tables & visual reporting</h4><p>Excel Tables, PivotTables, slicers, charts, PivotCharts, named ranges and table columns</p></article>
                <article><span>09</span><h4>Modern 365 functions</h4><p>FILTER, UNIQUE, SEQUENCE, SORT, SORTBY, TEXTJOIN, TEXTSPLIT, TEXTAFTER, TEXTBEFORE, XLOOKUP, XMATCH</p></article>
                <article><span>10</span><h4>Dynamic arrays</h4><p>CHOOSECOLS, CHOOSEROWS, TAKE, DROP, VSTACK, HSTACK, LAMBDA, GROUPBY and PIVOTBY</p></article>
                <article class="curriculum-outcome"><span>Q&A</span><h4>Questions & doubt clarification</h4><p>Practice the tools with business examples and get time to clarify your approach.</p></article>
            </div>
        </details>
        <p class="curriculum-note"><span>↳</span> Excel topics include practical functions, PivotTables, charts and Microsoft 365 tools, with questions and doubt clarification built into learning.</p>
    </div>
</section>

<section class="practice-section" id="about">
    <div class="container practice-grid">
        <div class="practice-copy"><span class="section-kicker section-kicker-light">LEARNING THAT CONNECTS TO WORK</span><h2>Less watching.<br><em>More doing.</em></h2><p>Industry experts guide you through realistic datasets and business scenarios, so you can practise the work behind the screen and understand why each step matters.</p><a class="button button-lime" href="{{ route('google.redirect') }}">Start your application <span aria-hidden="true">↗</span></a></div>
        <div class="practice-list">
            <div><span>01</span><p><strong>Work on real-time data</strong>Practise with examples shaped around actual business tasks.</p><b>↗</b></div>
            <div><span>02</span><p><strong>Learn in a small group</strong>With only 10–12 seats, there is time for questions and individual support.</p><b>↗</b></div>
            <div><span>03</span><p><strong>Build useful confidence</strong>Apply the skills with guidance, feedback and room to clarify doubts.</p><b>↗</b></div>
        </div>
    </div>
</section>

<section class="schedule-section section-pad">
    <div class="container schedule-card">
        <div class="schedule-main"><span class="section-kicker">A ROUTINE YOU CAN KEEP</span><h2>Learn on the weekend.<br>Use it all week.</h2><p>Morning classes, small batches and two-hour sessions make space for focused, steady progress.</p><a class="button button-dark" href="{{ route('google.redirect') }}">Request a seat <span aria-hidden="true">↗</span></a></div>
        <div class="schedule-details">
            <div><span class="schedule-symbol">◷</span><p><strong>2-hour sessions</strong><small>Focused practice, not rushed lectures</small></p></div>
            <div><span class="schedule-symbol">☼</span><p><strong>Weekend mornings</strong><small>Three morning sessions each week</small></p></div>
            <div><span class="schedule-symbol">◎</span><p><strong>3–4 batches each month</strong><small>Only 10–12 learners in each batch</small></p></div>
        </div>
        <div class="schedule-foot"><span>WEEKEND BATCHES</span><span>SMALL BY DESIGN <i></i> BUILT FOR PRACTICE</span></div>
    </div>
</section>

<section class="final-cta">
    <div class="container final-cta-inner"><div><span class="section-kicker section-kicker-light">YOUR NEXT STEP STARTS HERE</span><h2>Ready to build a skill<br>you can put to work?</h2></div><a class="button button-lime" href="{{ route('google.redirect') }}">Apply for a seat <span aria-hidden="true">↗</span></a></div>
</section>
@endsection
