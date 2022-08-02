<?php

// $servername = "localhost";
// $username = "root";
// $password = "";

// try {
// 	$conn = new PDO("mysql:host=$servername;dbname=myDB", $username, $password);
// 	// set the PDO error mode to exception
// 	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
// 	echo "Connected successfully";
// } catch (PDOException $e) {
// 	echo "Connection failed: " . $e->getMessage();
// }


// $mysqli = new mysqli("localhost", "root", "bazaDeDateUrmeaza?");

// if ($mysqli->connect_errno) {
// 	echo "Connect failed" . $mysqli->connect_error;
// 	exit();
// }

// $factura = array();
// $sql = "SELECT * FROM bazeDeDateUrmeaza?";

// if ($result = $mysqli->query($sql)) {

// 	$factura = $results->fetch_all(MYSQLI_ASSOC);

// 	if (count($factura)) {
// 		$xmlFiles = createXMLFile($factura);

// 		echo "<br/><h3>XML file generate Successfully.<br/>Click <a href='" . $xmlFiles . "'>" . $xmlFiles . "</a> link to open</h3>";
// 	} else {
// 		echo "<br/> <h3> No record found</h3>";
// 	}

// 	$result->free();
// }
// $mysqli->close();

$CUSTOMER = 1;
$SUPPLIER = 2;

function createXML($factura)
{
	//$filePath = "incaNuStiu/DarMaGandesc/hapciu.xml";
	$CUSTOMER = 1;
	$SUPPLIER = 2;

	$mapClient = $clienti->map(function ($client, $key) {
		return [
			'id' => $client->id,
			'endpoint_id' => $client->endpoint_id,
		];
	});


	$dom = new DOMDocument('1.0', 'utf-8');
	$rootElement = $dom->createElement('Invoice');

	$rootElement->setAttribute(
		"xmlns:cbc",
		"urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2"
	);
	$rootElement->setAttribute(
		"xmlns:udt",
		"urn:oasis:names:specification:ubl:schema:xsd:UnqualifiedDataTypes-2"
	);
	$rootElement->setAttribute(
		"xmlns:cac",
		"urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2"
	);
	$rootElement->setAttribute("xmlns:ccts", "urn:un:unece:uncefact:documentation:2");
	$rootElement->setAttribute("xmlns", "urn:oasis:na->es:specification:ubl:schema:xsd:Invoice-2");
	$rootElement->setAttribute("xmlns:qdt", "urn:oasis:names:specification:ubl:schema:xsd:QualifiedDataTypes-2");
	$rootElement->setAttribute(
		"xsi:schemaLocation",
		"urn:oasis:names:specification:ubl:schema:xsd:Invoice-2 ../../UBL-2.1(1)/xsd/maindoc/UBL-Invoice-2.1.xsd"
	);
	$rootElement->setAttribute("xmlns:xsi", "http://www.w3.org/2001/XMLSchema-instance");

	$dom->appendChild($rootElement);

	addInvoiceMetadata($rootElement, $dom, $factura);

	addAccountingParty($dom, $rootElement, $SUPPLIER, $furnizor);

	//client = getDateClient();

	addAccountingParty($dom, $rootElement, $CUSTOMER, $client); // factura.getOrDefault("client", new HashMap())

	// addAccountingCustomerParty(dom$dom, rootElement);

	addTaxTotal($dom, $rootElement, $factura);

	addLegalMonetaryTotal($dom, $rootElement, $factura);

	echo $dom->saveXML();
	//
}

function addInvoiceMetadata($rootElement, $dom, $factura)
{

	$ublVersionID = $dom->createElement("cbc:UBLVersionID");
	$rootElement->appendChild($ublVersionID);
	$ublVersionID->setTextContent($factura['ubl_version_id']);

	$customizationID = $dom->createElement("cbc:CustomizationID");
	$rootElement->appendChild($customizationID);
	$customizationID->setTextContent($factura['customization_id']);

	$ID = $dom->createElement("cbc:ID");
	$rootElement->appendChild($ID);
	$ID->setTextContent($factura['id']);

	$issueDate = $dom->createElement("cbc:IssueDate");
	$rootElement->appendChild($issueDate);
	$issueDate->setTextContent($factura['issue_date']);

	$dueDate = $dom->createElement("cbc:DueDate");
	$rootElement->appendChild($dueDate);
	$dueDate->setTextContent($factura['due_date']);

	$invoiceTypeCode = $dom->createElement("cbc:InvoiceTypeCode");
	$rootElement->appendChild($invoiceTypeCode);
	$invoiceTypeCode->setTextContent($factura['invoice_type_code']);

	$documentCurrencyCode = $dom->createElement("cbc:DocumentCurrencyCode");
	$rootElement->appendChild($documentCurrencyCode);
	$documentCurrencyCode->setTextContent($factura['document_currency_code']);

	$taxCurrencyCode = $dom->createElement("cbc:TaxCurrencyCode");
	$rootElement->appendChild($taxCurrencyCode);
	$taxCurrencyCode->setTextContent($factura['tax_currency_code']);

	$invoicePeriod = $dom->createElement("cac:InvoicePeriod");
	$rootElement->appendChild($invoicePeriod);

	$startDate = $dom->createElement("cbc:StartDate");
	$invoicePeriod->appendChild($startDate);
	$startDate->setTextContent($factura['start_date']);

	$endDate = $dom->createElement("cbc:EndDate");
	$invoicePeriod->appendChild($endDate);
	$endDate->setTextContent($factura['end_date']);

	$contractDocumentReference = $dom->createElement("cac:ContractDocumentReference");
	$rootElement->appendChild($contractDocumentReference);

	$contractDocumentReferenceID = $dom->createElement("cbc:ID");
	$contractDocumentReference->appendChild($contractDocumentReferenceID);
	$contractDocumentReferenceID->setTextContent($factura['contract_id']);
};
function addAccountingParty($dom, $rootElement, $type, $cf)
{
	$CUSTOMER = 1;
	$SUPPLIER = 2;

	$accountingParty = null;
	if ($type == $CUSTOMER) {
		$accountingParty = $dom->createElement("cac:AccountingCustomerParty");
	}
	if ($type == $SUPPLIER) {
		$accountingParty = $dom->createElement("cac:AccountingSupplierParty");
	}
	$rootElement->appendChild($accountingParty);

	$party = $dom->createElement("cac:Party");
	$accountingParty->appendChild($party);

	$endpointID = $dom->createElement("cbc:EndpointID");
	$party->appendChild($endpointID);
	$endpointID->setTextContent($cf['endpoint_id']);
	$endpointID->setAttribute("schemeID", $cf['schema_id']);

	$partyIdentification = $dom->createElement("cac:PartyIdentification");
	$party->appendChild($partyIdentification);

	$identificationID = $dom->createElement("cbc:ID");
	$partyIdentification->appendChild($identificationID);
	$identificationID->setTextContent($cf['endpoint_id']);

	$postalAddress = $dom->createElement("cac:PostalAddress");
	$party->appendChild($postalAddress);

	addPostalAdress($dom, $postalAddress, $cf);

	$partyTaxScheme = $dom->createElement("cac:PartyTaxScheme");
	$party->appendChild($partyTaxScheme);

	addPartyTaxSchema($dom, $partyTaxScheme, $cf);

	$partyLegalEntity = $dom->createElement("cac:PartyLegalEntity");
	$party->appendChild($partyLegalEntity);

	addPartyLegalEntity($dom, $partyLegalEntity, $type, $cf);

	$contact = $dom->createElement("cac:Contact");
	$party->appendChild($contact);

	addContact($dom, $contact, $cf);
};

function addContact($dom, $Contact, $cf)
{

	if (!((string) $cf->getOrDefault("name", "")) == "") {
		$name = $dom->createElement("cbc:Name");
		$Contact->appendChild($name);
		$name->setTextContent($cf['name']);
	}

	$telephone = $dom->createElement("cbc:Telephone");
	$Contact->appendChild($telephone);
	$telephone->setTextContent($cf['telephone']);

	$electronicMail = $dom->createElement("cbc:ElectronicMail");
	$Contact->appendChild($electronicMail);
	$electronicMail->setTextContent($cf['electronic_mail']);
}

//client = getDateClient();

// function addAccountingParty($dom, $rootElement, $CUSTOMER, $client)
// {
// };

function addPostalAdress($dom, $postalAddress, $cf)
{
	$streetName = $dom->createElement("cbc:StreetName");
	$postalAddress->appendChild($streetName);
	$streetName->setTextContent($cf['street_name']);

	$cityName = $dom->createElement("cbc:CityName");
	$postalAddress->appendChild($cityName);
	$cityName->setTextContent($cf['city_name']);

	$countrySubentity = $dom->createElement("cbc:CountrySubentity");
	$postalAddress->appendChild($countrySubentity);
	$countrySubentity->setTextContent($cf['country_subentity']);

	$country = $dom->createElement("cac:Country");
	$postalAddress->appendChild($country);

	$identificationCode = $dom->createElement("cbc:IdentificationCode");
	$country->appendChild($identificationCode);
	$identificationCode->setTextContent($cf['identification_code']);
};


function addPartyLegalEntity($dom, $partyLegalEntity, $type, $cf)
{
	$CUSTOMER = 1;
	$SUPPLIER = 2;
	if ($type == $SUPPLIER) {
		$registrationName = $dom->createElement("cbc:RegistrationName");
		$registrationName->setTextContent($cf["registration_name"]);
		$partyLegalEntity->appendChild($registrationName);

		$partyLegalEntityCompanyID = $dom->createElement("cbc:CompanyID");
		$partyLegalEntityCompanyID->setTextContent($cf["company_id"]);
		$partyLegalEntity->appendChild($partyLegalEntityCompanyID);

		$companyLegalForm = $dom->createElement("cbc:CompanyLegalForm");
		$companyLegalForm->setTextContent($cf["company_legal_form"]);
		$partyLegalEntity->appendChild($companyLegalForm);
	}
	if ($type == $CUSTOMER) {
		$customerRegistrationName = $dom->createElement("cbc:RegistrationName");
		$customerRegistrationName->setTextContent($cf["registration_name"]);
		$partyLegalEntity->appendChild($customerRegistrationName);
	}
};


function addPartyTaxSchema($dom, $partyTaxScheme, $cf)
{
	$companyID = $dom->createElement("cbc:CompanyID");
	$companyID->setTextContent($cf["company_id_tax"]);
	$partyTaxScheme->appendChild($companyID);

	$taxScheme = $dom->createElement("cac:TaxScheme");
	$partyTaxScheme->appendChild($taxScheme);

	$taxSchemeID = $dom->createElement("cbc:ID");
	$taxSchemeID->setTextContent($cf["tax_id"]);
	$taxScheme->appendChild($taxSchemeID);
};

function addTaxTotal($dom, $rootElement, $factura)
{
	$taxTotal = $dom->createElement("cac:TaxTotal");
	$rootElement->appendChild($taxTotal);

	$taxAmount = $dom->createElement("cbc:IdentificationCode");
	$taxTotal->appendChild($taxAmount);
	$taxAmount->setTextContent($factura['tax_amount']);
	$taxAmount->setAttribute("currencyID", $factura['currency_id']);

	$taxSubtotal = $dom->createElement("cac:TaxSubtotal");
	$taxTotal->appendChild($taxSubtotal);

	$taxableAmount = $dom->createElement("cbc:TaxableAmount");
	$taxSubtotal->appendChild($taxableAmount);
	$taxableAmount->setTextContent($factura['taxable_amount']);
	$taxableAmount->setAttribute("currencyID", $factura['currency_id']);

	$taxAmountSubtotal = $dom->createElement("cbc:TaxAmount");
	$taxSubtotal->appendChild($taxAmountSubtotal);
	$taxAmountSubtotal->setTextContent($factura['tax_amount_subtotal']);
	$taxAmountSubtotal->setAttribute("currencyID", $factura['currency_id']);

	$taxCategory = $dom->createElement("cac:TaxCategory");
	$taxSubtotal->appendChild($taxCategory);

	$taxCategoryID = $dom->createElement("cbc:ID");
	$taxCategory->appendChild($taxCategoryID);
	$taxCategoryID->setTextContent($factura['tax_category_id']);

	$percent = $dom->createElement("cbc:Percent");
	$taxCategory->appendChild($percent);
	$percent->setTextContent($factura['tax_category_percent']);

	$taxSchemeSubtotal = $dom->createElement("cac:TaxScheme");
	$taxCategory->appendChild($taxSchemeSubtotal);

	$taxSchemeSubtotalID = $dom->createElement("cbc:ID");
	$taxSchemeSubtotal->appendChild($taxSchemeSubtotalID);
	$taxSchemeSubtotalID->setTextContent($factura['tax_category_scheme_id']);
};

function addLegalMonetaryTotal($dom, $rootElement, $factura)
{
	$legalMonetaryTotal = $dom->createElement("cac:LegalMonetaryTotal");
	$rootElement->appendChild($legalMonetaryTotal);

	$lineExtensionAmount = $dom->createElement("cbc:LineExtensionAmount");
	$lineExtensionAmount->setAttribute("currencyID", $factura["currency_id"]);
	$lineExtensionAmount->setTextContent($factura["line_extension_amount"]);
	$legalMonetaryTotal->appendChild($lineExtensionAmount);

	$taxExclusiveAmount = $dom->createElement("cbc:TaxExclusiveAmount");
	$taxExclusiveAmount->setAttribute("currencyID", $factura["currency_id"]);
	$taxExclusiveAmount->setTextContent($factura["tax_exclusive_amount"]);
	$legalMonetaryTotal->appendChild($taxExclusiveAmount);

	$taxInclusiveAmount = $dom->createElement("cbc:TaxInclusiveAmount");
	$taxInclusiveAmount->setAttribute("currencyID", $factura["currency_id"]);
	$taxInclusiveAmount->setTextContent($factura["tax_inclusive_amount"]);
	$legalMonetaryTotal->appendChild($taxInclusiveAmount);

	$payableAmount = $dom->createElement("cbc:PayableAmount");
	$payableAmount->setAttribute("currencyID", $factura["currency_id"]);
	$payableAmount->setTextContent($factura["payable_amount"]);
	$legalMonetaryTotal->appendChild($payableAmount);
};
function addInvoiceLine($dom, $rootElement, $linie)
{
	$invoiceLine = $dom->createElement("cac:InvoiceLine");
	$rootElement->appendChild($invoiceLine);

	$invoiceLineID = $dom->createElement("cbc:ID");
	$invoiceLineID->setTextContent($linie["invoice_line_id"]);
	$invoiceLine->appendChild($invoiceLineID);

	$invoicedQuantity = $dom->createElement("cbc:InvoicedQuantity");
	$invoicedQuantity->setAttribute("unitCode", $linie["unit_code_quantity"]);
	$invoicedQuantity->setTextContent($linie["invoiced_quantity"]);
	$invoiceLine->appendChild($invoicedQuantity);

	$lineExtensionAmountItem = $dom->createElement("cbc:LineExtensionAmount");
	$lineExtensionAmountItem->setAttribute("currencyID", $linie["currency_id"]);
	$lineExtensionAmountItem->setTextContent($linie["line_extension_amount"]);
	$invoiceLine->appendChild($lineExtensionAmountItem);

	$item = $dom->createElement("cac:Item");
	$invoiceLine->appendChild($item);

	$itemName = $dom->createElement("cbc:Name");
	$itemName->setTextContent($linie["item_name"]);
	$item->appendChild($itemName);

	$classifiedTaxCategory = $dom->createElement("cac:ClassifiedTaxCategory");
	$item->appendChild($classifiedTaxCategory);

	$classifiedTaxCategoryID = $dom->createElement("cbc:ID");
	$classifiedTaxCategoryID->setTextContent($linie["item_tax_category_id"]);
	$classifiedTaxCategory->appendChild($classifiedTaxCategoryID);

	$classifiedTaxCategoryPercent = $dom->createElement("cbc:Percent");
	$classifiedTaxCategoryPercent->setTextContent($linie["item_tax_category_percent"]);
	$classifiedTaxCategory->appendChild($classifiedTaxCategoryPercent);

	$classifiedTaxScheme = $dom->createElement("cac:TaxScheme");
	$classifiedTaxCategory->appendChild($classifiedTaxScheme);

	$classifiedTaxSchemeID = $dom->createElement("cbc:ID");
	$classifiedTaxSchemeID->setTextContent($linie["item_tax_category_scheme_id"]);
	$classifiedTaxScheme->appendChild($classifiedTaxSchemeID);

	$price = $dom->createElement("cac:Price");
	$invoiceLine->appendChild($price);

	$priceAmount = $dom->createElement("cbc:PriceAmount");
	$priceAmount->setAttribute("currencyID", $linie["currency_id"]);
	$priceAmount->setTextContent($linie["price_amount"]);
	$price->appendChild($priceAmount);
}
