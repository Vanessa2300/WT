<!-- all-products.xsl -->
<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
  <xsl:output method="html" encoding="UTF-8"/>
  
  <!-- Match the root element of the XML -->
  <xsl:template match="/products">
    <html>
      <head>
        <title>Product Catalog</title>
      </head>
      <body>
        <h1>Product Catalog</h1>
        <table>
          <tr>
            <th>Type</th>
            <th>Name</th>
            <th>Author/Version</th>
            <th>Price</th>
            <th>Description</th>
          </tr>
          <xsl:apply-templates select="product"/>
        </table>
      </body>
    </html>
  </xsl:template>

  <!-- Match each product element -->
  <xsl:template match="product">
    <tr>
      <td><xsl:value-of select="type"/></td>
      <td><xsl:value-of select="name"/></td>
      <td>
        <xsl:choose>
          <xsl:when test="type = 'book'">
            <xsl:value-of select="author"/>
          </xsl:when>
          <xsl:otherwise>
            <xsl:value-of select="version"/>
          </xsl:otherwise>
        </xsl:choose>
      </td>
      <td><xsl:value-of select="price"/></td>
      <td><xsl:value-of select="description"/></td>
    </tr>
  </xsl:template>
</xsl:stylesheet>
