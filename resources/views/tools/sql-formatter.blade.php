@extends('layouts.tool')

@section('title', 'SQL Formatter Online - Beautify SQL Queries')

@section('meta_description', 'Format and beautify SQL queries online with this free SQL Formatter. Make complex SQL easier to read with clean indentation and spacing.')

@section('canonical', url('/sql-formatter'))

@section('og_title', 'SQL Formatter Online')

@section('og_description', 'Format and beautify SQL queries instantly with this free online SQL Formatter.')

@section('og_url', url('/sql-formatter'))

@section('twitter_title', 'SQL Formatter Online')

@section('twitter_description', 'Format SQL queries with clean indentation and readable structure using this free online SQL Formatter.')

@section('tool_name', 'SQL Formatter')

@section('breadcrumb', 'SQL Formatter')

@section('tool_badge', 'Developer Tool')


@section('tool_content')

<div class="tool-box">

    <div class="mb-4">

        <label for="sqlInput" class="form-label fw-semibold">
            Enter SQL Query
        </label>

        <textarea
            id="sqlInput"
            class="form-control"
            rows="14"
            placeholder="Paste your SQL query here..."
            aria-label="SQL query input"></textarea>

    </div>


    <div class="row g-3 mb-4">

        <div class="col-md-6">

            <label for="sqlIndent" class="form-label fw-semibold">
                Indentation
            </label>

            <select
                id="sqlIndent"
                class="form-select"
                aria-label="SQL indentation">

                <option value="2">2 Spaces</option>
                <option value="4">4 Spaces</option>
                <option value="tab">Tab</option>

            </select>

        </div>

        <div class="col-md-6 d-flex align-items-end">

            <button
                type="button"
                id="formatSql"
                class="btn btn-primary w-100">
                Format SQL
            </button>

        </div>

    </div>


    <div class="mb-3">

        <label for="sqlOutput" class="form-label fw-semibold">
            Formatted SQL
        </label>

        <textarea
            id="sqlOutput"
            class="form-control"
            rows="16"
            readonly
            aria-label="Formatted SQL output"></textarea>

    </div>


    <div class="d-flex flex-wrap gap-2">

        <button
            type="button"
            id="copySql"
            class="btn btn-outline-primary">
            Copy
        </button>

        <button
            type="button"
            id="useSqlOutput"
            class="btn btn-outline-secondary">
            Use Output
        </button>

        <button
            type="button"
            id="clearSql"
            class="btn btn-outline-secondary">
            Clear
        </button>

    </div>


    <div
        id="sqlMessage"
        class="small text-muted mt-3"
        aria-live="polite">
    </div>

</div>

@endsection


@section('seo_content')

<div class="tool-content-section">

    <h2>SQL Formatter Online</h2>

    <p>
        SQL Formatter is a free online tool for formatting and beautifying SQL
        queries. SQL queries can become difficult to read when they contain
        many columns, conditions, joins, subqueries and nested expressions.
        Proper indentation and line breaks make the structure of a query
        easier to understand and can make development and debugging more
        convenient.
    </p>

    <p>
        SQL is used to communicate with relational databases and is commonly
        found in applications that store structured information. Developers
        often write SQL queries manually or receive generated queries from
        applications and database tools. A formatter can reorganize the
        presentation of a query without requiring the developer to manually
        insert spaces and line breaks.
    </p>

    <p>
        This SQL Formatter is designed for quick readability improvements.
        You can paste a SQL query into the input area, select an indentation
        style and format the query. Keywords and common SQL clauses are placed
        on separate lines where appropriate so that the overall structure is
        easier to inspect.
    </p>

    <p>
        Formatting SQL is especially useful when working with long SELECT,
        INSERT, UPDATE and DELETE statements. Queries containing JOIN,
        WHERE, GROUP BY, ORDER BY and other clauses can become much easier to
        follow when each major section is clearly separated.
    </p>

    <p>
        A SQL formatter changes the presentation of a query rather than the
        intended database operation. However, formatting tools can have
        limitations with highly complex or database-specific SQL syntax.
        Always review formatted SQL before using it in production systems,
        especially when working with complex queries or vendor-specific
        features.
    </p>

    <p>
        The tool runs directly in your browser and is convenient for developers,
        students and database users who need a quick way to clean up SQL.
        There is no need to install a dedicated SQL formatting application for
        simple formatting tasks.
    </p>


    <h2>Why Format SQL Queries?</h2>

    <p>
        Formatting improves the readability of SQL. A long query written on a
        single line can be difficult to understand because all clauses and
        conditions appear together. Breaking the query into logical sections
        makes it easier to identify tables, columns, joins and filtering
        conditions.
    </p>

    <p>
        Readable SQL is also easier to maintain. When a developer needs to
        modify a query later, clear indentation can make it easier to locate
        the correct clause and understand how different parts of the query
        relate to one another.
    </p>


    <h2>Common SQL Statements</h2>

    <p>
        SQL is commonly used with statements such as SELECT, INSERT, UPDATE
        and DELETE. SELECT queries retrieve data, INSERT statements add
        records, UPDATE statements modify existing records and DELETE
        statements remove records according to specified conditions.
    </p>

    <p>
        SQL also includes clauses such as WHERE, GROUP BY, HAVING and ORDER BY.
        JOIN operations are commonly used to combine information from multiple
        tables. Formatting these clauses separately can make complicated
        queries considerably easier to inspect.
    </p>


    <h2>SQL Formatting for Developers</h2>

    <p>
        Developers can use an SQL formatter while writing or reviewing
        application queries. It can be particularly helpful when debugging a
        query that has been generated dynamically or copied from a database
        management tool.
    </p>

    <p>
        Students can also use SQL formatting while learning database concepts.
        A readable query makes it easier to understand the relationship between
        SELECT columns, tables, joins and filtering conditions. It can also
        make SQL examples easier to review and study.
    </p>


    <h2>Frequently Asked Questions</h2>

    <div class="tool-faq">

        <div class="faq-item mb-3">

            <h3>What does an SQL Formatter do?</h3>

            <p>
                An SQL Formatter reorganizes SQL queries with indentation,
                spacing and line breaks to make them easier to read.
            </p>

        </div>

        <div class="faq-item mb-3">

            <h3>Does formatting change the SQL query?</h3>

            <p>
                The purpose of formatting is to improve presentation while
                keeping the intended SQL structure and statements intact.
            </p>

        </div>

        <div class="faq-item mb-3">

            <h3>Can I format SELECT queries?</h3>

            <p>
                Yes. The formatter can be used with common SQL queries,
                including SELECT statements and queries containing common
                clauses and joins.
            </p>

        </div>

        <div class="faq-item mb-3">

            <h3>Can I choose the indentation?</h3>

            <p>
                Yes. You can choose two spaces, four spaces or tabs for
                indentation.
            </p>

        </div>

        <div class="faq-item mb-3">

            <h3>Is this SQL Formatter free?</h3>

            <p>
                Yes. The SQL Formatter is free to use online without requiring
                additional software.
            </p>

        </div>

    </div>

</div>

@endsection


@section('tool_schema')

<script type="application/ld+json">
{
    "@@context": "https://schema.org",
    "@@type": "WebApplication",
    "name": "SQL Formatter",
    "url": "{{ url('/sql-formatter') }}",
    "description": "Free online SQL Formatter for formatting and beautifying SQL queries.",
    "applicationCategory": "DeveloperApplication",
    "operatingSystem": "Any",
    "browserRequirements": "Requires JavaScript",
    "offers": {
        "@@type": "Offer",
        "price": "0",
        "priceCurrency": "USD"
    },
    "isAccessibleForFree": true
}
</script>

@endsection


@section('breadcrumb_schema')

<script type="application/ld+json">
{
    "@@context": "https://schema.org",
    "@@type": "BreadcrumbList",
    "itemListElement": [
        {
            "@@type": "ListItem",
            "position": 1,
            "name": "Home",
            "item": "{{ url('/') }}"
        },
        {
            "@@type": "ListItem",
            "position": 2,
            "name": "SQL Formatter",
            "item": "{{ url('/sql-formatter') }}"
        }
    ]
}
</script>

@endsection


@push('scripts')

<script>
document.addEventListener('DOMContentLoaded', function () {

    const input =
        document.getElementById('sqlInput');

    const output =
        document.getElementById('sqlOutput');

    const indent =
        document.getElementById('sqlIndent');

    const message =
        document.getElementById('sqlMessage');

    const formatButton =
        document.getElementById('formatSql');

    const copyButton =
        document.getElementById('copySql');

    const useOutputButton =
        document.getElementById('useSqlOutput');

    const clearButton =
        document.getElementById('clearSql');


    function getIndent() {

        if (indent.value === 'tab') {
            return '\t';
        }

        return ' '.repeat(
            Number(indent.value)
        );

    }


    function formatSQL(sql) {

        const space =
            getIndent();


        sql =
            sql
                .replace(/\s+/g, ' ')
                .trim();


        const keywords = [
            'SELECT',
            'FROM',
            'WHERE',
            'GROUP BY',
            'HAVING',
            'ORDER BY',
            'LIMIT',
            'OFFSET',
            'UNION',
            'UNION ALL',
            'LEFT JOIN',
            'RIGHT JOIN',
            'INNER JOIN',
            'OUTER JOIN',
            'FULL JOIN',
            'CROSS JOIN',
            'JOIN',
            'SET',
            'VALUES'
        ];


        keywords.sort(
            function (a, b) {
                return b.length - a.length;
            }
        );


        keywords.forEach(function (keyword) {

            const regex =
                new RegExp(
                    '\\s+' +
                    keyword.replace(
                        / /g,
                        '\\s+'
                    ) +
                    '\\s+',
                    'gi'
                );


            sql =
                sql.replace(
                    regex,
                    '\n' + keyword + ' '
                );

        });


        sql =
            sql.replace(
                /\s+AND\s+/gi,
                '\n' + space + 'AND '
            );


        sql =
            sql.replace(
                /\s+OR\s+/gi,
                '\n' + space + 'OR '
            );


        sql =
            sql.replace(
                /\s*,\s*/g,
                ',\n' + space
            );


        const lines =
            sql
                .split('\n')
                .map(function (line) {
                    return line.trim();
                })
                .filter(function (line) {
                    return line.length > 0;
                });


        return lines.join('\n');

    }


    formatButton.addEventListener(
        'click',
        function () {

            output.value = '';

            const value =
                input.value.trim();


            if (!value) {

                message.textContent =
                    'Please enter an SQL query.';

                return;

            }


            output.value =
                formatSQL(value);

            message.textContent =
                'SQL formatted successfully.';

        }
    );


    copyButton.addEventListener(
        'click',
        async function () {

            if (!output.value) {

                message.textContent =
                    'Format SQL first.';

                return;

            }


            try {

                await navigator.clipboard.writeText(
                    output.value
                );

                message.textContent =
                    'Formatted SQL copied.';

            } catch (e) {

                output.select();

                document.execCommand('copy');

                message.textContent =
                    'Formatted SQL copied.';

            }

        }
    );


    useOutputButton.addEventListener(
        'click',
        function () {

            if (!output.value) {
                return;
            }

            input.value =
                output.value;

            message.textContent =
                'Output moved to input.';

        }
    );


    clearButton.addEventListener(
        'click',
        function () {

            input.value = '';

            output.value = '';

            message.textContent = '';

            input.focus();

        }
    );

});
</script>

@endpush