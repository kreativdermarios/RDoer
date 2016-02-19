class CreateAcessos < ActiveRecord::Migration
  def change
    create_table :acessos do |t|
      t.string :id_acesso
      t.string :url

      t.timestamps null: false
    end
  end
end
