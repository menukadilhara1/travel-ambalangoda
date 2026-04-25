export async function onRequest(context) {
  const url = new URL(context.request.url);
  
  // Cloudflare Workers block fetching raw IP addresses (returns 403 Forbidden).
  // To fix this, we use the free sslip.io service which acts as a valid domain name.
  const targetUrl = `http://167.71.193.120.sslip.io:8080${url.pathname}${url.search}`;
  
  const proxyRequest = new Request(targetUrl, context.request);
  proxyRequest.headers.set('Host', '167.71.193.120.sslip.io');

  return fetch(proxyRequest);
}
