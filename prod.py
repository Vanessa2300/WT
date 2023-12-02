import lxml.etree as ET

# Load the XML and XSL files
xml_file = "D:\\PESMCOE\\Web Technology\\Assign 2\\amazon-extended.xml"  # Replace with the actual XML file path
xsl_file = "D:\\PESMCOE\\Web Technology\\Assign 2\\all-products.xslt"   # Replace with the XSLT file path

# Parse the XML and XSL files
xml_tree = ET.parse(xml_file)
xsl_tree = ET.parse(xsl_file)

# Create an XSLT transformer
transform = ET.XSLT(xsl_tree)

# Apply the transformation to the XML
result_tree = transform(xml_tree)

# Display the resulting HTML
print(ET.tostring(result_tree, pretty_print=True, encoding="unicode"))
