<?xml version="1.0" encoding="UTF-8"?>

<xsl:stylesheet version="1.0"
                xmlns:xsl="http://www.w3.org/1999/XSL/Transform"
                xmlns:sitemap="http://www.sitemaps.org/schemas/sitemap/0.9"
                xmlns:xhtml="http://www.w3.org/1999/xhtml">

    <xsl:output method="html" encoding="UTF-8" indent="yes"/>

    <xsl:template match="/">

        <html>
            <head>
                <title>XML Sitemap</title>

                <style>
                    body{
                    font-family:Arial,sans-serif;
                    background:#f5f5f5;
                    margin:40px;
                    }

                    h1{
                    margin-bottom:10px;
                    }

                    p{
                    color:#666;
                    }

                    table{
                    width:100%;
                    border-collapse:collapse;
                    background:#fff;
                    }

                    th{
                    background:#222;
                    color:#fff;
                    padding:12px;
                    text-align:left;
                    }

                    td{
                    padding:10px;
                    border-bottom:1px solid #eee;
                    }

                    tr:hover{
                    background:#fafafa;
                    }

                    a{
                    color:#0b63ce;
                    text-decoration:none;
                    }

                    small{
                    color:#888;
                    }
                </style>

            </head>

            <body>

                <h1>XML Sitemap</h1>

                <p>
                    Total URLs:
                    <strong>
                        <xsl:value-of select="count(sitemap:urlset/sitemap:url)"/>
                    </strong>
                </p>

                <table>

                    <tr>
                        <th>URL</th>
                        <th>Last Modified</th>
                        <th>Priority</th>
                        <th>Changefreq</th>
                        <th>Languages</th>
                    </tr>

                    <xsl:for-each select="sitemap:urlset/sitemap:url">

                        <tr>

                            <td>
                                <a href="{sitemap:loc}">
                                    <xsl:value-of select="sitemap:loc"/>
                                </a>
                            </td>

                            <td>
                                <xsl:value-of select="sitemap:lastmod"/>
                            </td>

                            <td>
                                <xsl:value-of select="sitemap:priority"/>
                            </td>

                            <td>
                                <xsl:value-of select="sitemap:changefreq"/>
                            </td>

                            <td>

                                <xsl:for-each select="xhtml:link">

                                    <div>

                                        <strong>
                                            <xsl:value-of select="@hreflang"/>
                                        </strong>

                                        :

                                        <a href="{@href}">
                                            <xsl:value-of select="@href"/>
                                        </a>

                                    </div>

                                </xsl:for-each>

                            </td>

                        </tr>

                    </xsl:for-each>

                </table>

            </body>

        </html>

    </xsl:template>

</xsl:stylesheet>
