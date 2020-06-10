<?php

/**
 * Proxmox PHP API
 *
 * @copyright 2020 eekdood <eekdood@gmail.com>
 * @license http://opensource.org/licenses/MIT The MIT License.
 */

namespace Proxmox;

// /api2/json/config/
class Config
{
  /**
    * Create initial cluster config with current node as master.
    * POST /api2/json/config/cluster/create
  */
  public function clusterCreate()
  {
      return Request::Request("/config/cluster/create", null, "POST");
  }
  /**
    * Join local node to an existing cluster.
    * POST /api2/json/config/cluster/join
    * @param array()	$data
  */
  public function clusterJoin($data = array())
  {
      return Request::Request("/config/cluster/join", $data, "POST");
  }
  /**
    * Cluster node index.
    * GET /api2/json/config/cluster/nodes
  */
  public function clusterNodesList()
  {
      return Request::Request("/config/cluster/nodes");
  }
  /**
    * Add a node to the cluster config.
    * POST /api2/json/config/cluster/nodes
    * @param array()	$data
  */
  public function clusterNodesAdd($data = array())
  {
      return Request::Request("/config/cluster/nodes", $data, "POST");
  }
  /**
    * List custom scores.
    * GET /api2/json/config/customscores
  */
  public function customscores()
  {
      return Request::Request("/config/customscores");
  }
  /**
    * Create custom SpamAssassin score.
    * POST /api2/json/config/customscores
    * @param array()	$data
  */
  public function customscoresAdd($data = array())
  {
      return Request::Request("/config/customscores", $data, "POST");
  }
  /**
    * Apply custom score changes.
    * PUT /api2/json/config/customscores
    * @param array()	$data
  */
  public function customscoresApply($domain, $data = array())
  {
      return Request::Request("/config/customscores", $data, "PUT");
  }
  /**
    * Revert custom score changes.
    * DELETE /api2/json/config/customscores
  */
  public function customscoresRevert($domain)
  {
      return Request::Request("/config/customscores", null, "DELETE");
  }
  /**
    * Get custom SpamAssassin score.
    * GET /api2/json/config/customscores/{name}
    * @param string   $name     The name of the rule.
  */
  public function customscoresInfo($name)
  {
      return Request::Request("/config/customscores/$name");
  }
  /**
    * Edit custom SpamAssassin score.
    * PUT /api2/json/config/customscores/{name}
    * @param string   $name     The name of the rule.
    * @param array()	$data
  */
  public function customscoresUpdate($name, $data = array())
  {
      return Request::Request("/config/customscores/$name", $data, "PUT");
  }
  /**
    * Delete custom SpamAssassin score.
    * DELETE /api2/json/config/customscores/{name}
    * @param string   $name     The name of the rule.
  */
  public function customscoresDelete($name)
  {
      return Request::Request("/config/customscores/$name", null, "DELETE");
  }
  /**
    * List DKIM-sign domains.
    * GET /api2/json/config/dkim/domains
  */
  public function dkim()
  {
      return Request::Request("/config/dkim/domains");
  }
  /**
    * Add DKIM-sign domain.
    * POST /api2/json/config/dkim/domains
    * @param array()	$data
  */
  public function dkimAdd($data = array())
  {
      return Request::Request("/config/dkim/domains", $data, "POST");
  }
  /**
    * Read domain data (comment).
    * GET /api2/json/config/dkim/domains/{domain}
    * @param string   $domain     The domain name.
  */
  public function dkimInfo($domain)
  {
      return Request::Request("/config/dkim/domains/$domain");
  }
  /**
    * Update DKIM-sign domain data (comment).
    * PUT /api2/json/config/dkim/domains/{domain}
    * @param string   $domain     The domain name.
    * @param array()	$data
  */
  public function dkimUpdate($domain, $data = array())
  {
      return Request::Request("/config/dkim/domains/$domain", $data, "PUT");
  }
  /**
    * Delete a DKIM-sign domain.
    * DELETE /api2/json/config/dkim/domains/{domain}
    * @param string		$domain		The domain name.
  */
  public function dkimDelete($domain)
  {
      return Request::Request("/config/dkim/domains/$domain", null, "DELETE");
  }
  /**
    * Get the public key for the configured selector, prepared as DKIM TXT record.
    * GET /api2/json/config/dkim/selector
  */
  public function dkimSelector()
  {
      return Request::Request("/config/dkim/selector");
  }
  /**
    * Generate a new private key for selector. All future mail will be signed with the new key!.
    * POST /api2/json/config/dkim/selector
    * @param array()	$data
  */
  public function dkimSelectorNew($data = array())
  {
      return Request::Request("/config/dkim/selector", $data, "POST");
  }
  /**
    * List relay domains.
    * GET /api2/json/config/domains
  */
  public function domains()
  {
      return Request::Request("/config/domains");
  }
  /**
    * Add relay domain.
    * POST /api2/json/config/domains
    * @param array()	$data
  */
  public function domainAdd($data = array())
  {
      return Request::Request("/config/domains", $data, "POST");
  }
  /**
    * read domain data.
    * GET /api2/json/config/domains/{domain}
    * @param string   $domain     The domain name.
  */
  public function domainInfo($domain)
  {
      return Request::Request("/config/domains/$domain");
  }
  /**
    * Update relay domain (comment).
    * PUT /api2/json/config/domains/{domain}
    * @param string   $domain     The domain name.
    * @param array()	$data
  */
  public function domainUpdate($domain, $data = array())
  {
      return Request::Request("/config/domains/$domain", $data, "PUT");
  }
  /**
    * Delete a relay domain.
    * DELETE /api2/json/config/domains/{domain}
    * @param string		$domain		The domain name.
  */
  public function domainDelete($domain)
  {
      return Request::Request("/config/domains/$domain", null, "DELETE");
  }
  /**
    * List fetchmail users.
    * GET /api2/json/config/fetchmail
  */
  public function fetchmail()
  {
      return Request::Request("/config/fetchmail");
  }
  /**
    * Create fetchmail user configuration.
    * POST /api2/json/config/fetchmail
    * @param array()	$data
  */
  public function fetchmailAdd($data = array())
  {
      return Request::Request("/config/fetchmail", $data, "POST");
  }
  /**
    * Read fetchmail user configuration.
    * GET /api2/json/config/fetchmail/{id}
    * @param string   $id     Unique ID.
  */
  public function fetchmailInfo($id)
  {
      return Request::Request("/config/fetchmail/$id");
  }
  /**
    * Update fetchmail user configuration.
    * PUT /api2/json/config/fetchmail/{id}
    * @param string   $id     Unique ID.
    * @param array()	$data
  */
  public function fetchmailUpdate($id, $data = array())
  {
      return Request::Request("/config/fetchmail/$id", $data, "PUT");
  }
  /**
    * Delete a fetchmail configuration entry.
    * DELETE /api2/json/config/fetchmail/{id}
    * @param string		$id		Unique ID.
  */
  public function fetchmailDelete($id)
  {
      return Request::Request("/config/fetchmail/$id", null, "DELETE");
  }
  
  
  
  // ldap
  
  
  
  /**
    * List of trusted networks from where SMTP clients are allowed to relay mail through Proxmox Mail Gateway.
    * GET /api2/json/config/mynetworks
  */
  public function mynetworks()
  {
      return Request::Request("/config/mynetworks");
  }
  /**
    * Add a trusted network.
    * POST /api2/json/config/mynetworks
    * @param array()	$data
  */
  public function mynetworksAdd($data = array())
  {
      return Request::Request("/config/mynetworks", $data, "POST");
  }
  /**
    * Read trusted network data (comment).
    * GET /api2/json/config/mynetworks/{cidr}
    * @param string   $cidr     IPv4 or IPv6 network in CIDR notation.
  */
  public function mynetworksInfo($cidr)
  {
      return Request::Request("/config/mynetworks/$cidr");
  }
  /**
    * Update trusted data (comment).
    * PUT /api2/json/config/mynetworks/{cidr}
    * @param string   $cidr     IPv4 or IPv6 network in CIDR notation.
    * @param array()	$data
  */
  public function mynetworksUpdate($cidr, $data = array())
  {
      return Request::Request("/config/mynetworks/$cidr", $data, "PUT");
  }
  /**
    * Delete a truster network.
    * DELETE /api2/json/config/mynetworks/{cidr}
    * @param string   $cidr     IPv4 or IPv6 network in CIDR notation.
  */
  public function mynetworksDelete($cidr)
  {
      return Request::Request("/config/mynetworks/$cidr", null, "DELETE");
  }
  
  
    
  // ruledb
  
  
  
  /**
    * List tls_policy entries.
    * GET /api2/json/config/tlspolicy
  */
  public function tlspolicy()
  {
      return Request::Request("/config/tlspolicy");
  }
  /**
    * Add tls_policy entry.
    * POST /api2/json/config/tlspolicy
    * @param array()	$data
  */
  public function tlspolicyAdd($data = array())
  {
      return Request::Request("/config/tlspolicy", $data, "POST");
  }
  /**
    * Read tls_policy entry.
    * GET /api2/json/config/tlspolicy/{domain}
    * @param string   $domain     The domain name.
  */
  public function tlspolicyInfo($domain)
  {
      return Request::Request("/config/tlspolicy/$domain");
  }
  /**
    * Update tls_policy entry.
    * PUT /api2/json/config/tlspolicy/{domain}
    * @param string   $domain     The domain name.
    * @param array()	$data
  */
  public function tlspolicyUpdate($domain, $data = array())
  {
      return Request::Request("/config/tlspolicy/$domain", $data, "PUT");
  }
  /**
    * Delete a tls_policy entry.
    * DELETE /api2/json/config/tlspolicy/{domain}
    * @param string		$domain		The domain name.
  */
  public function tlspolicyDelete($domain)
  {
      return Request::Request("/config/tlspolicy/$domain", null, "DELETE");
  }
  
  /**
    * List transport map entries.
    * GET /api2/json/config/transport
  */
  public function transport()
  {
      return Request::Request("/config/transport");
  }
  /**
    * Add transport map entry.
    * POST /api2/json/config/transport
    * @param array()	$data
  */
  public function transportAdd($data = array())
  {
      return Request::Request("/config/transport", $data, "POST");
  }
  /**
    * Read transport map entry.
    * GET /api2/json/config/transport/{domain}
    * @param string   $domain     The domain name.
  */
  public function transportInfo($domain)
  {
      return Request::Request("/config/transport/$domain");
  }
  /**
    * Update transport map entry.
    * PUT /api2/json/config/transport/{domain}
    * @param string   $domain     The domain name.
    * @param array()	$data
  */
  public function transportUpdate($domain, $data = array())
  {
      return Request::Request("/config/transport/$domain", $data, "PUT");
  }
  /**
    * Delete a transport map entry.
    * DELETE /api2/json/config/transport/{domain}
    * @param string		$domain		The domain name.
  */
  public function transportDelete($domain)
  {
      return Request::Request("/config/transport/$domain", null, "DELETE");
  }
  
  // whitelist
  
  // admin, clamav, mail, mimetypes, regextest, spam, spamquar, virusquar
}
