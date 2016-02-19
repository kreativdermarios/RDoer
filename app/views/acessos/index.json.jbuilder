json.array!(@acessos) do |acesso|
  json.extract! acesso, :id, :id_acesso, :url
  json.url acesso_url(acesso, format: :json)
end
